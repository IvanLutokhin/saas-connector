<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response\PrintBarcode
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response\PrintBarcode;

use Faker\Provider\Uuid;
use SaaS\Service\Cdek\Model\Response\PrintBarcode\GetPrintBarcodeResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class DeleteOrderResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\PrintBarcode
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class GetPrintBarcodeResponseTest extends TestCase
{
    public function testGetPrintBarcode()
    {
        $mockHandler = $this->getMockHandler([['className' => GetPrintBarcodeResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->getPrintBarcode(Uuid::uuid());

        static::assertResponse($response);
        static::assertInstanceOf(GetPrintBarcodeResponse::class, $response->getResponse());
    }
}
