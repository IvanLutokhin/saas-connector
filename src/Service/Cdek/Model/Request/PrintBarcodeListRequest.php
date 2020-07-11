<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Request
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Request;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;
use SaaS\Service\Cdek\Model\Order;

/**
 * Class PrintBarcodeListRequest
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class PrintBarcodeListRequest
{
    /**
     * @var array|Order[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Order>")
     * @Serializer\SerializedName("orders")
     */
    public $orders;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("copy_count")
     *
     * @FakeMockField(value="2")
     */
    public $copyCount;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("format")
     *
     * @FakeMockField(value="A4")
     */
    public $format;
}
