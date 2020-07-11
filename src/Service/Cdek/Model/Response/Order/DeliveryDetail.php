<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Order
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Response\Order;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class DeliveryDetail
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Order
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class DeliveryDetail
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date")
     *
     * @FakeMockField(value="2020-01-01")
     */
    public $date;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recipient_name")
     *
     * @FakeMockField(value="")
     */
    public $recipientName;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("payment_sum")
     *
     * @FakeMockField(value="100.0")
     */
    public $paymentSum;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("delivery_sum")
     *
     * @FakeMockField(value="50.0")
     */
    public $deliverySum;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("total_sum")
     *
     * @FakeMockField(value="150.0")
     */
    public $totalSum;
}
