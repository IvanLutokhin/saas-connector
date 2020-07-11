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

/**
 * Class GetDeliveryPointRequest
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
class GetDeliveryPointListRequest
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("postal_code")
     *
     * @FakeMockField(value="")
     */
    public $postalCode;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("city_code")
     *
     * @FakeMockField(value="27")
     */
    public $cityCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     *
     * @FakeMockField(value="")
     */
    public $type;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("country_code")
     *
     * @FakeMockField(value="")
     */
    public $countryCode;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("region_code")
     *
     * @FakeMockField(value="")
     */
    public $regionCode;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("have_cashless")
     *
     * @FakeMockField(value="")
     */
    public $haveCashless;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("have_cash")
     *
     * @FakeMockField(value="")
     */
    public $haveCash;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("allowed_cod")
     *
     * @FakeMockField(value="1")
     */
    public $allowedCod;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("is_dressing_room")
     *
     * @FakeMockField(value="")
     */
    public $isDressingRoom;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("weight_max")
     *
     * @FakeMockField(value="50")
     */
    public $weightMax;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("weight_min")
     *
     * @FakeMockField(value="")
     */
    public $weightMin;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lang")
     *
     * @FakeMockField(value="")
     */
    public $lang;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("take_only")
     *
     * @FakeMockField(value="")
     */
    public $takeOnly;
}
