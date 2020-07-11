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

use SaaS\Service\Cdek\Model\Request\GetRegionListRequest;
use SaaS\Service\Cdek\Model\Response\GetRegionListResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class GetRegionListResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class GetRegionListResponseTest extends TestCase
{
    public function testGetRegions()
    {
        $mockHandler = $this->getMockHandler([['className' => GetRegionListResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->getRegions($this->fakeMock->fill(GetRegionListRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(GetRegionListResponse::class, $response->getResponse());
    }
}
