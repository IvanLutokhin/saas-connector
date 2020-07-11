<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Calculator
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response\Calculator;

use SaaS\Service\Cdek\Model\Request\Calculator\CalculateTariffListRequest;
use SaaS\Service\Cdek\Model\Response\Calculator\TariffListResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class TariffListResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Calculator
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class TariffListResponseTest extends TestCase
{
    public function testCreateOrder()
    {
        $mockHandler = $this->getMockHandler([['className' => TariffListResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->calculateTariffList($this->fakeMock->fill(CalculateTariffListRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(TariffListResponse::class, $response->getResponse());
    }
}
