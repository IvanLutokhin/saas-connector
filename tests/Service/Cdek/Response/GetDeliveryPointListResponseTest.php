<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response;

use SaaS\Service\Cdek\Model\Request\GetDeliveryPointListRequest;
use SaaS\Service\Cdek\Model\Response\GetDeliveryPointListResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class GetDeliveryPointListResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class GetDeliveryPointListResponseTest extends TestCase
{
    public function testGetDeliveryPoints()
    {
        $mockHandler = $this->getMockHandler([['className' => GetDeliveryPointListResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->getDeliveryPoints($this->fakeMock->fill(GetDeliveryPointListRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(GetDeliveryPointListResponse::class, $response->getResponse());
    }
}
