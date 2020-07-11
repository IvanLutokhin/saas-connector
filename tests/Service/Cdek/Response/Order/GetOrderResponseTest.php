<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Order
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response\Order;

use Faker\Provider\Uuid;
use SaaS\Service\Cdek\Model\Response\Order\GetOrderResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class GetOrderResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Order
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class GetOrderResponseTest extends TestCase
{
    public function testGetOrder()
    {
        $mockHandler = $this->getMockHandler([['className' => GetOrderResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->getOrder(Uuid::uuid());

        static::assertResponse($response);
        static::assertInstanceOf(GetOrderResponse::class, $response->getResponse());
    }
}
