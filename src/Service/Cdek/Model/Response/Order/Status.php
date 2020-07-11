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
 * Class Status
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
class Status
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("code")
     *
     * @FakeMockField(value="ACCEPTED")
     */
    public $code;

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
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     *
     * @FakeMockField(value="Принят")
     */
    public $name;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date_time")
     *
     * @FakeMockField(value="2020-01-28T16:19:26+0700")
     */
    public $dateTime;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reason_code")
     *
     * @FakeMockField(value="")
     */
    public $reasonCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     *
     * @FakeMockField(value="Офис СДЭК")
     */
    public $city;
}
