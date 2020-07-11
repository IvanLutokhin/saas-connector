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

use SaaS\Service\Cdek\Model\Request\PrintOrderListRequest;
use SaaS\Service\Cdek\Model\Response\PrintOrder\PrintOrderListResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class PrintOrderListResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\PrintOrder
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class PrintOrderListResponseTest extends TestCase
{
    public function testPrintOrders()
    {
        $mockHandler = $this->getMockHandler([['className' => PrintOrderListResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->printOrders($this->fakeMock->fill(PrintOrderListRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(PrintOrderListResponse::class, $response->getResponse());
    }
}
