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
use SaaS\Service\Cdek\Model\Contact;
use SaaS\Service\Cdek\Model\Location;
use SaaS\Service\Cdek\Model\Money;
use SaaS\Service\Cdek\Model\Package;
use SaaS\Service\Cdek\Model\Seller;
use SaaS\Service\Cdek\Model\Service;
use SaaS\Service\Cdek\Model\Threshold;

/**
 * Class OrderEntity
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
class OrderEntity
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("uuid")
     *
     * @FakeMockField(value="72753031-4b5f-4084-9b09-c50b84a23da6")
     */
    public $uuid;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_return")
     *
     * @FakeMockField(value="true")
     */
    public $isReturn;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("type")
     *
     * @FakeMockField(value="1")
     */
    public $type;

    /**
     * @var double
     *
     * @Serializer\Type("double")
     * @Serializer\SerializedName("cdek_number")
     *
     * @FakeMockField(value="")
     */
    public $cdekNumber;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("number")
     *
     * @FakeMockField(value="ddOererre7450813980068")
     */
    public $number;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("tariff_code")
     *
     * @FakeMockField(value="137")
     */
    public $tariffCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("developer_key")
     *
     * @FakeMockField(value="test-dev-key")
     */
    public $developerKey;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipment_point")
     *
     * @FakeMockField(value="")
     */
    public $shipmentPoint;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("delivery_point")
     *
     * @FakeMockField(value="")
     */
    public $deliveryPoint;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date_invoice")
     *
     * @FakeMockField(value="")
     */
    public $dateInvoice;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipper_name")
     *
     * @FakeMockField(value="")
     */
    public $shipperName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipper_address")
     *
     * @FakeMockField(value="")
     */
    public $shipperAddress;

    /**
     * @var Money
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Money")
     * @Serializer\SerializedName("delivery_recipient_cost")
     */
    public $deliveryRecipientCost;

    /**
     * @var array|Threshold[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Threshold>")
     * @Serializer\SerializedName("delivery_recipient_cost_adv")
     */
    public $deliveryRecipientCostAdv;

    /**
     * @var Contact
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Contact")
     * @Serializer\SerializedName("sender")
     */
    public $sender;

    /**
     * @var Seller
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Seller")
     * @Serializer\SerializedName("seller")
     */
    public $seller;

    /**
     * @var Contact
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Contact")
     * @Serializer\SerializedName("recipient")
     */
    public $recipient;

    /**
     * @var Location
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Location")
     * @Serializer\SerializedName("from_location")
     */
    public $fromLocation;

    /**
     * @var Location
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Location")
     * @Serializer\SerializedName("to_location")
     */
    public $toLocation;

    /**
     * @var array|Service[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Service>")
     * @Serializer\SerializedName("services")
     */
    public $services;

    /**
     * @var array|Package[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Package>")
     * @Serializer\SerializedName("packages")
     */
    public $packages;

    /**
     * @var DeliveryDetail
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\DeliveryDetail")
     * @Serializer\SerializedName("delivery_detail")
     */
    public $deliveryDetail;

    /**
     * @var array|Status[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Response\Order\Status>")
     * @Serializer\SerializedName("statuses")
     */
    public $statuses;
}
