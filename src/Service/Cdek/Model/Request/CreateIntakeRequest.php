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
use SaaS\Service\Cdek\Model\Contact;
use SaaS\Service\Cdek\Model\Location;

/**
 * Class CreateIntakeRequest
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
class CreateIntakeRequest
{
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
     * @Serializer\SerializedName("order_uuid")
     *
     * @FakeMockField(value="")
     */
    public $orderUuid;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("intake_date")
     *
     * @FakeMockField(value="2019-10-02")
     */
    public $intakeDate;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("intake_time_from")
     *
     * @FakeMockField(value="10:00")
     */
    public $intakeTimeFrom;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("intake_time_to")
     *
     * @FakeMockField(value="17:00")
     */
    public $intakeTimeTo;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lunch_time_from")
     *
     * @FakeMockField(value="")
     */
    public $lunchTimeFrom;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lunch_time_to")
     *
     * @FakeMockField(value="")
     */
    public $lunchTimeTo;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     *
     * @FakeMockField(value="Консолидированный груз")
     */
    public $name;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("weight")
     *
     * @FakeMockField(value="1000")
     */
    public $weight;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("length")
     *
     * @FakeMockField(value="10")
     */
    public $length;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("width")
     *
     * @FakeMockField(value="10")
     */
    public $width;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     *
     * @FakeMockField(value="10")
     */
    public $height;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("comment")
     *
     * @FakeMockField(value="Комментарий курьеру")
     */
    public $comment;

    /**
     * @var Contact
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Contact")
     * @Serializer\SerializedName("sender")
     */
    public $sender;

    /**
     * @var Location
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Location")
     * @Serializer\SerializedName("from_location")
     */
    public $fromLocation;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("need_call")
     *
     * @FakeMockField(value="false")
     */
    public $needCall = false;
}
