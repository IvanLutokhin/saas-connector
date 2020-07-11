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

use SaaS\Service\Cdek\Model\Request\GetCityListRequest;
use SaaS\Service\Cdek\Model\Response\GetCityListResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class GetCityListResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class GetCityListResponseTest extends TestCase
{
    public function testGetCities()
    {
        $mockHandler = $this->getMockHandler([['className' => GetCityListResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->getCities($this->fakeMock->fill(GetCityListRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(GetCityListResponse::class, $response->getResponse());
    }
}
