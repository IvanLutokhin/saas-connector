<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Dellin
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek;

use SaaS\Service\Cdek;

/**
 * Class ApiClientTest
 *
 * @package  SaaS\Tests\Service\Dellin
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ApiClientTest extends TestCase
{
    public function testInitialize()
    {
        $apiClient = $this->getApiClient();

        static::assertNotEmpty($apiClient);
        static::assertIsObject($apiClient);
        static::assertInstanceOf(Cdek\Client::class, $apiClient);
    }

    public function testErrors()
    {
        $this->expectException(Cdek\Exception\CdekApiResponseException::class);

        $mockHandler = $this->getMockHandler([
            [
                'body' => json_encode([
                    'requests' => [
                        [
                            'errors' => [
                                [
                                    'code' => 'error_code_first',
                                    'message' => 'error_message_first'
                                ],
                                [
                                    'code' => 'error_code_second',
                                    'message' => 'error_message_second'
                                ],
                            ],
                        ],
                    ],
                ]),
                'statusCode' => 200,
            ],
        ]);

        $this->getApiClient($mockHandler)->createOrder(new Cdek\Model\Request\CreateOrderRequest());
    }

    public function testWarnings()
    {
        $this->expectException(Cdek\Exception\CdekApiResponseException::class);

        $mockHandler = $this->getMockHandler([
            [
                'body' => json_encode([
                    'requests' => [
                        [
                            'warnings' => [
                                [
                                    'code' => 'warning_code_first',
                                    'message' => 'warning_message_first'
                                ],
                                [
                                    'code' => 'warning_code_second',
                                    'message' => 'warning_message_second'
                                ],
                            ],
                        ],
                    ],
                ]),
                'statusCode' => 200,
            ],
        ]);

        $this->getApiClient($mockHandler)->createOrder(new Cdek\Model\Request\CreateOrderRequest());
    }
}
