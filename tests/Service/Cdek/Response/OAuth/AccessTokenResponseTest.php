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

use SaaS\Service\Cdek\Model\Response\OAuth\AccessTokenResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class AccessTokenResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\OAuth
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class AccessTokenResponseTest extends TestCase
{
    public function testAuthorize()
    {
        $mockHandler = $this->getMockHandler([['className' => AccessTokenResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler, false);
        $apiClient->authorize('epT5FMOa7IwjjlwTc1gUjO1GZDH1M1rE', 'cYxOu9iAMZYQ1suEqfEvsHld4YQzjY0X');

        static::assertFalse($apiClient->isAccessTokenExpired());
    }
}
