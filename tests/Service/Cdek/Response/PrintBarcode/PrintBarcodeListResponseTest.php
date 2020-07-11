<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Tests\Service\Cdek\Response\PrintBarcode
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Tests\Service\Cdek\Response\PrintBarcode;

use SaaS\Service\Cdek\Model\Request\PrintBarcodeListRequest;
use SaaS\Service\Cdek\Model\Response\PrintBarcode\PrintBarcodeListResponse;
use SaaS\Tests\Service\Cdek\TestCase;

/**
 * Class PrintBarcodeListResponseTest
 *
 * @package  SaaS\Tests\Service\Cdek\Response\PrintBarcode
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class PrintBarcodeListResponseTest extends TestCase
{
    public function testPrintBarcodes()
    {
        $mockHandler = $this->getMockHandler([['className' => PrintBarcodeListResponse::class, 'statusCode' => 200]]);
        $apiClient = $this->getApiClient($mockHandler);
        $response = $apiClient->printBarcodes($this->fakeMock->fill(PrintBarcodeListRequest::class));

        static::assertResponse($response);
        static::assertInstanceOf(PrintBarcodeListResponse::class, $response->getResponse());
    }
}
