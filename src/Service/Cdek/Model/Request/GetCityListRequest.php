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
 * Class GetCityListRequest
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
class GetCityListRequest
{
    /**
     * @var array|string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("country_codes")
     */
    public $countryCodes;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("region_code")
     *
     * @FakeMockField(value="")
     */
    public $regionCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladr_region_code")
     *
     * @FakeMockField(value="")
     */
    public $kladrRegionCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fias_region_guid")
     *
     * @FakeMockField(value="")
     */
    public $fiasRegionGuid;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladr_code")
     *
     * @FakeMockField(value="")
     */
    public $kladrCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fias_guid")
     *
     * @FakeMockField(value="")
     */
    public $fiasGuid;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("postal_code")
     *
     * @FakeMockField(value="")
     */
    public $postalCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("code")
     *
     * @FakeMockField(value="")
     */
    public $code;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     *
     * @FakeMockField(value="")
     */
    public $city;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("size")
     *
     * @FakeMockField(value="")
     */
    public $size;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("page")
     *
     * @FakeMockField(value="")
     */
    public $page;

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
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("payment_limit")
     *
     * @FakeMockField(value="")
     */
    public $paymentLimit;
}
