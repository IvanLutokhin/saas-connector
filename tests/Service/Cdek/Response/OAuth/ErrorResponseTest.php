<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response\OAuth
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response\OAuth;

use SaaS\Service\Cdek\Exception\CdekApiResponseException;
use SaaS\Service\Cdek\Model\Response\OAuth\ErrorResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class ErrorResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\OAuth
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ErrorResponseTest extends TestCase
{
    public function testAuthorizeFailure()
    {
        $this->expectException(CdekApiResponseException::class);

        $mockHandler = $this->getMockHandler([['className' => ErrorResponse::class, 'statusCode' => 400]]);
        $apiClient = $this->getApiClient($mockHandler, false);
        $apiClient->authorize('epT5FMOa7IwjjlwTc1gUjO1GZDH1M1rE', 'cYxOu9iAMZYQ1suEqfEvsHld4YQzjY0X');

        static::assertTrue($apiClient->isAccessTokenExpired());
    }
}
