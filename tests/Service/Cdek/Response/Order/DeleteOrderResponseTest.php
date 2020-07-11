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
use SaaS\Service\Cdek\Model\Response\Order\DeleteOrderResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class DeleteOrderResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Order
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class DeleteOrderResponseTest extends TestCase
{
    public function testDeleteOrder()
    {
        $mockHandler = $this->getMockHandler([['className' => DeleteOrderResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->deleteOrder(Uuid::uuid());

        static::assertResponse($response);
        static::assertInstanceOf(DeleteOrderResponse::class, $response->getResponse());
    }
}
