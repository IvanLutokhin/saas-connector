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
use SaaS\Service\Cdek\Model\Response\Intake\DeleteIntakeResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class DeleteIntakeResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Intake
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class DeleteIntakeResponseTest extends TestCase
{
    public function testDeleteIntake()
    {
        $mockHandler = $this->getMockHandler([['className' => DeleteIntakeResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->deleteIntake(Uuid::uuid());

        static::assertResponse($response);
        static::assertInstanceOf(DeleteIntakeResponse::class, $response->getResponse());
    }
}
