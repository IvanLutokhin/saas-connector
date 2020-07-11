<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Intake
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response\Intake;

use Faker\Provider\Uuid;
use SaaS\Service\Cdek\Model\Response\Intake\GetIntakeResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class GetIntakeResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Intake
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class GetIntakeResponseTest extends TestCase
{
    public function testGetIntake()
    {
        $mockHandler = $this->getMockHandler([['className' => GetIntakeResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->getIntake(Uuid::uuid());

        static::assertResponse($response);
        static::assertInstanceOf(GetIntakeResponse::class, $response->getResponse());
    }
}
