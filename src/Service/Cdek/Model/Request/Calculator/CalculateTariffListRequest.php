<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Request\Calculator
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Request\Calculator;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CalculateTariffListRequest
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Request\Calculator
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class CalculateTariffListRequest
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("version")
     *
     * @FakeMockField(value="1.0")
     */
    public $version = '1.0';

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("authLogin")
     *
     * @FakeMockField(value="")
     */
    public $authLogin;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("secure")
     *
     * @FakeMockField(value="")
     */
    public $secure;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dateExecute")
     *
     * @FakeMockField(value="2019-04-01")
     */
    public $dateExecute;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lang")
     *
     * @FakeMockField(value="rus")
     */
    public $lang;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("senderCountryCode")
     *
     * @FakeMockField(value="")
     */
    public $senderCountryCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("receiverCountryCode")
     *
     * @FakeMockField(value="")
     */
    public $receiverCountryCode;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("senderCityId")
     *
     * @FakeMockField(value="44")
     */
    public $senderCityId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("senderCity")
     *
     * @FakeMockField(value="")
     */
    public $senderCity;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("senderCityPostCode")
     *
     * @FakeMockField(value="")
     */
    public $senderCityPostCode;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("receiverCityId")
     *
     * @FakeMockField(value="269")
     */
    public $receiverCityId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("receiverCity")
     *
     * @FakeMockField(value="")
     */
    public $receiverCity;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("receiverCityPostCode")
     *
     * @FakeMockField(value="")
     */
    public $receiverCityPostCode;

     /**
      * @var float
      *
      * @Serializer\Type("float")
      * @Serializer\SerializedName("senderLongitude")
      *
      * @FakeMockField(value="")
      */
    public $senderLongitude;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("receiverLongitude")
     *
     * @FakeMockField(value="")
     */
    public $receiverLongitude;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("senderLatitude")
     *
     * @FakeMockField(value="")
     */
    public $senderLatitude;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("receiverLatitude")
     *
     * @FakeMockField(value="")
     */
    public $receiverLatitude;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     *
     * @FakeMockField(value="RUB")
     */
    public $currency;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("tariffId")
     *
     * @FakeMockField(value="")
     */
    public $tariffId;

    /**
     * @var array|Tariff[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Request\Calculator\Tariff>")
     * @Serializer\SerializedName("tariffList")
     */
    public $tariffs;

    /**
     * @var array|Good[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Request\Calculator\\Good>")
     * @Serializer\SerializedName("goods")
     */
    public $goods;

    /**
     * @var array|Service[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Request\Calculator\\Service>")
     * @Serializer\SerializedName("services")
     */
    public $services;
}
