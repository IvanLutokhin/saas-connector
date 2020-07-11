<?php

/**
 * PHP version 7.1
 *
 * @category Cdek
 * @package  SaaS\Service\Cdek
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use SaaS\Exception\InvalidJsonException;
use SaaS\Service\Cdek\Exception\CdekApiException;
use SaaS\Service\Cdek\Exception\CdekApiResponseException;
use SaaS\Service\Cdek\Model\Request\Calculator\CalculateTariffListRequest;
use SaaS\Service\Cdek\Model\Request\CreateIntakeRequest;
use SaaS\Service\Cdek\Model\Request\CreateOrderRequest;
use SaaS\Service\Cdek\Model\Request\GetCityListRequest;
use SaaS\Service\Cdek\Model\Request\GetDeliveryPointListRequest;
use SaaS\Service\Cdek\Model\Request\GetRegionListRequest;
use SaaS\Service\Cdek\Model\Request\PrintBarcodeListRequest;
use SaaS\Service\Cdek\Model\Request\PrintOrderListRequest;
use SaaS\Service\Cdek\Model\Response\Calculator\TariffListResponse;
use SaaS\Service\Cdek\Model\Response\GetCityListResponse;
use SaaS\Service\Cdek\Model\Response\GetDeliveryPointListResponse;
use SaaS\Service\Cdek\Model\Response\GetRegionListResponse;
use SaaS\Service\Cdek\Model\Response\Intake\CreateIntakeResponse;
use SaaS\Service\Cdek\Model\Response\Intake\DeleteIntakeResponse;
use SaaS\Service\Cdek\Model\Response\Intake\GetIntakeResponse;
use SaaS\Service\Cdek\Model\Response\OAuth\ErrorResponse;
use SaaS\Service\Cdek\Model\Response\OAuth\AccessTokenResponse;
use SaaS\Service\Cdek\Model\Response\Order\CreateOrderResponse;
use SaaS\Service\Cdek\Model\Response\Order\DeleteOrderResponse;
use SaaS\Service\Cdek\Model\Response\Order\GetOrderResponse;
use SaaS\Service\Cdek\Model\Response\PrintBarcode\GetPrintBarcodeResponse;
use SaaS\Service\Cdek\Model\Response\PrintBarcode\PrintBarcodeListResponse;
use SaaS\Service\Cdek\Model\Response\PrintOrder\GetPrintOrderResponse;
use SaaS\Service\Cdek\Model\Response\PrintOrder\PrintOrderListResponse;
use SaaS\Service\Cdek\Model\Response\Response;

/**
 * @category Cdek
 * @package  SaaS\Service\Cdek
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Client
{
    public const BASE_API_URL = 'https://api.cdek.ru/v2/';
    public const BASE_API_TEST_URL = 'https://api.edu.cdek.ru/v2/';
    public const BASE_API_CALCULATOR_URL = 'http://api.cdek.ru/calculator/';
    public const BASE_API_CALCULATOR_TEST_URL = 'http://api.edu.cdek.ru/calculator/';

    public const CONFIG = [
        'http_errors' => false,
        'headers'  => [
            'Content-type' => 'application/json',
            'Accept' => 'application/json',
            'Cache-Control' =>'no-cache'
        ],
    ];

    /** @var string */
    protected $clientId;

    /** @var string */
    protected $clientSecret;

    /** @var bool */
    protected $accessTokenRenew = false;

    /** @var string|null */
    protected $accessToken;

    /** @var \DateTime|null */
    protected $expiresIn;

    /** @var bool */
    protected $useTestServer = false;

    /** @var \GuzzleHttp\Client */
    protected $client;

    /** @var Serializer */
    protected $serializer;

    public function __construct(string $clientId = null, string $clientSecret = null, bool $accessTokenRenew = false)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->accessTokenRenew = $accessTokenRenew;

        $this->client = new \GuzzleHttp\Client(self::CONFIG);

        $serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new SerializedNameAnnotationStrategy(
                    new IdenticalPropertyNamingStrategy()
                )
            )
            ->build()
        ;

        if ($serializer instanceof Serializer) {
            $this->serializer = $serializer;
        }
    }

    public function isUseTestServer(): bool
    {
        return $this->useTestServer;
    }

    public function setUseTestServer(bool $useTestServer): self
    {
        $this->useTestServer = $useTestServer;

        return $this;
    }

    public function getClient(): \GuzzleHttp\Client
    {
        return $this->client;
    }

    public function setClient(\GuzzleHttp\Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getBaseApiUrl(): string
    {
        return $this->useTestServer ? self::BASE_API_TEST_URL : self::BASE_API_URL;
    }

    public function getBaseApiCalculatorUrl(): string
    {
        return $this->useTestServer ? self::BASE_API_CALCULATOR_TEST_URL : self::BASE_API_CALCULATOR_URL;
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=29923918
     *
     * @group security
     *
     * @param string $clientId Login for personal account at cdek.ru
     * @param string $clientSecret Password for personal account at cdek.ru
     * @param bool $useTestServer Flag that activates the use of the test server
     *
     * @throws CdekApiResponseException
     */
    public function authorize(string $clientId, string $clientSecret, bool $useTestServer = false)
    {
        $response = $this->client->post('oauth/token?parameters', [
            'base_uri' => $useTestServer ? self::BASE_API_TEST_URL : self::BASE_API_URL,
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
            ]
        ]);

        $contents = $response->getBody()->getContents();

        $className = 200 === $response->getStatusCode() ? AccessTokenResponse::class : ErrorResponse::class;

        try {
            $deserializedResponse = $this->serializer->deserialize($contents, $className, 'json');
        } catch (\Exception $exception) {
            throw new InvalidJsonException(
                sprintf(
                    'Error json: %s | %s (raw: %s)',
                    $className,
                    $exception->getMessage(),
                    $contents
                )
            );
        }

        switch (true) {
            case $deserializedResponse instanceof AccessTokenResponse:
                $this->accessToken = $deserializedResponse->accessToken;
                $this->expiresIn = (new \DateTime())->add(
                    new \DateInterval(sprintf('PT%sS', $deserializedResponse->expiresIn))
                );

                break;

            case $deserializedResponse instanceof ErrorResponse:
                throw new CdekApiResponseException(
                    $contents,
                    [
                        $deserializedResponse->error => $deserializedResponse->errorDescription,
                    ]
                );
        }
    }

    public function isAccessTokenExpired(): bool
    {
        if (null === $this->accessToken || null === $this->expiresIn) {
            return true;
        }

        return (new \DateTime()) > $this->expiresIn;
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=29923926
     *
     * @group orders
     *
     * @param CreateOrderRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function createOrder(CreateOrderRequest $request): Response
    {
        return $this->doRequest('POST', 'orders', $request, CreateOrderResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=29923975
     *
     * @group orders
     *
     * @param string $uuid
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function getOrder(string $uuid): Response
    {
        return $this->doRequest('GET', sprintf('orders/%s', $uuid), null, GetOrderResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=29924487
     *
     * @group orders
     *
     * @param string $uuid
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function deleteOrder(string $uuid): Response
    {
        return $this->doRequest('DELETE', sprintf('orders/%s', $uuid), null, DeleteOrderResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=29925274
     *
     * @group intakes
     *
     * @param CreateIntakeRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function createIntake(CreateIntakeRequest $request): Response
    {
        return $this->doRequest('POST', 'intakes', $request, CreateIntakeResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=29948360
     *
     * @group intakes
     *
     * @param string $uuid
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function getIntake(string $uuid): Response
    {
        return $this->doRequest('GET', sprintf('intakes/%s', $uuid), null, GetIntakeResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=29948379
     *
     * @group intakes
     *
     * @param string $uuid
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function deleteIntake(string $uuid): Response
    {
        return $this->doRequest('DELETE', sprintf('intakes/%s', $uuid), null, DeleteIntakeResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=36967276
     *
     * @group prints
     *
     * @param PrintOrderListRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function printOrders(PrintOrderListRequest $request): Response
    {
        return $this->doRequest('POST', 'print/orders', $request, PrintOrderListResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=36967287
     *
     * @group prints
     *
     * @param string $uuid
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function getPrintOrder(string $uuid): Response
    {
        return $this->doRequest('GET', sprintf('print/orders/%s', $uuid), null, GetPrintOrderResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=36967295
     *
     * @group prints
     *
     * @param PrintBarcodeListRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function printBarcodes(PrintBarcodeListRequest $request): Response
    {
        return $this->doRequest('POST', 'print/barcodes', $request, PrintBarcodeListResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=36967298
     *
     * @group prints
     *
     * @param string $uuid
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function getPrintBarcode(string $uuid): Response
    {
        return $this->doRequest('GET', sprintf('print/barcodes/%s', $uuid), null, GetPrintBarcodeResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=36982648
     *
     * @group references
     *
     * @param GetDeliveryPointListRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function getDeliveryPoints(GetDeliveryPointListRequest $request): Response
    {
        return $this->doRequest('GET', 'deliverypoints', $request, GetDeliveryPointListResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=33829418
     *
     * @group references
     *
     * @param GetRegionListRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function getRegions(GetRegionListRequest $request): Response
    {
        return $this->doRequest('GET', 'location/regions', $request, GetRegionListResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=33829437
     *
     * @group references
     *
     * @param GetCityListRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function getCities(GetCityListRequest $request)
    {
        return $this->doRequest('GET', 'location/cities', $request, GetCityListResponse::class);
    }

    /**
     * @link https://confluence.cdek.ru/pages/viewpage.action?pageId=33829437
     *
     * @group calculator
     *
     * @param CalculateTariffListRequest $request
     *
     * @return Response
     *
     * @throws CdekApiException
     */
    public function calculateTariffList(CalculateTariffListRequest $request): Response
    {
        return new Response(
            $this->client->post(
                'calculate_tarifflist.php',
                [
                    'base_uri' => $this->getBaseApiCalculatorUrl(),
                    'json' => $this->serializer->toArray($request),
                ]
            ),
            TariffListResponse::class
        );
    }

    protected function doRequest(string $method, string $uri, $request, string $className): Response
    {
        if ($this->isAccessTokenExpired()) {
            if (!$this->accessTokenRenew) {
                throw new CdekApiException(['Access token expired.']);
            }

            $this->authorize($this->clientId ?? '', $this->clientSecret ?? '', $this->useTestServer ?? false);
        }

        $method = strtolower($method);

        $options = [
            'base_uri' => $this->getBaseApiUrl(),
            'headers' => [
                'Authorization' => sprintf('Bearer %s', $this->accessToken),
            ],
        ];

        if ($request) {
            $options['body'] = $this->serializer->serialize($request, 'json');
        }

        return new Response($this->client->$method($uri, $options), $className);
    }
}
