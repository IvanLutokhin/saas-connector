<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response\PrintOrder
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response\PrintOrder;

use Faker\Provider\Uuid;
use SaaS\Service\Cdek\Model\Response\PrintOrder\GetPrintOrderResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class GetPrintOrderResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\PrintOrder
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class GetPrintOrderResponseTest extends TestCase
{
    public function testGetPrintOrder()
    {
        $mockHandler = $this->getMockHandler([['className' => GetPrintOrderResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->getPrintOrder(Uuid::uuid());

        static::assertResponse($response);
        static::assertInstanceOf(GetPrintOrderResponse::class, $response->getResponse());
    }
}
