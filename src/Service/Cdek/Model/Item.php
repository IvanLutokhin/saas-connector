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
 * Class Item
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
class Item
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     *
     * @FakeMockField(value="")
     */
    public $name;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ware_key")
     *
     * @FakeMockField(value="")
     */
    public $wareKey;

    /**
     * @var Money
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Money")
     * @Serializer\SerializedName("payment")
     */
    public $payment;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("cost")
     *
     * @FakeMockField(value="")
     */
    public $cost;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("weight")
     *
     * @FakeMockField(value="")
     */
    public $weight;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("weight_gross")
     *
     * @FakeMockField(value="")
     */
    public $weightGross;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("amount")
     *
     * @FakeMockField(value="")
     */
    public $amount;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name_i18n")
     *
     * @FakeMockField(value="")
     */
    public $nameI18N;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("brand")
     *
     * @FakeMockField(value="")
     */
    public $brand;

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
     * @Serializer\SerializedName("material")
     *
     * @FakeMockField(value="")
     */
    public $material;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("wifi_gsm")
     *
     * @FakeMockField(value="")
     */
    public $wifiOrGsm;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("url")
     *
     * @FakeMockField(value="")
     */
    public $url;
}
