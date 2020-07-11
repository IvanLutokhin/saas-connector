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

use SaaS\Service\Cdek\Model\Request\CreateOrderRequest;
use SaaS\Service\Cdek\Model\Response\Order\CreateOrderResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class CreateOrderResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Order
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class CreateOrderResponseTest extends TestCase
{
    public function testCreateOrder()
    {
        $mockHandler = $this->getMockHandler([['className' => CreateOrderResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->createOrder($this->fakeMock->fill(CreateOrderRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(CreateOrderResponse::class, $response->getResponse());
    }
}
