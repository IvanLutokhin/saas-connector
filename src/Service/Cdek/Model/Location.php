<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Location
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class Location
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("code")
     *
     * @FakeMockField(value="270")
     */
    public $code;

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
     * @Serializer\SerializedName("longitude")
     *
     * @FakeMockField(value="")
     */
    public $longitude;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("latitude")
     *
     * @FakeMockField(value="")
     */
    public $latitude;

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
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("region")
     *
     * @FakeMockField(value="")
     */
    public $region;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sub_region")
     *
     * @FakeMockField(value="")
     */
    public $subRegion;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     *
     * @FakeMockField(value="Новосибирск")
     */
    public $city;

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
     * @Serializer\SerializedName("address")
     *
     * @FakeMockField(value="ул. Блюхера, 32")
     */
    public $address;
}
