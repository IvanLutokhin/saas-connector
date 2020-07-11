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

use SaaS\Service\Cdek\Model\Request\CreateIntakeRequest;
use SaaS\Service\Cdek\Model\Response\Intake\CreateIntakeResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class CreateIntakeResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\Intake
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class CreateIntakeResponseTest extends TestCase
{
    public function testCreateIntake()
    {
        $mockHandler = $this->getMockHandler([['className' => CreateIntakeResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->createIntake($this->fakeMock->fill(CreateIntakeRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(CreateIntakeResponse::class, $response->getResponse());
    }
}
