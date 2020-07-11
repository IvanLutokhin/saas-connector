<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Calculator
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Response\Calculator;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Price
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Calculator
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class Price
{
    /**
     * @var double
     *
     * @Serializer\Type("double")
     * @Serializer\SerializedName("price")
     *
     * @FakeMockField(value="")
     */
    public $price;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("deliveryPeriodMin")
     *
     * @FakeMockField(value="")
     */
    public $deliveryPeriodMin;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("deliveryPeriodMax")
     *
     * @FakeMockField(value="")
     */
    public $deliveryPeriodMax;

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
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("cashOnDelivery")
     *
     * @FakeMockField(value="")
     */
    public $cashOnDelivery;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("priceByCurrency")
     *
     * @FakeMockField(value="")
     */
    public $priceByCurrency;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     *
     * @FakeMockField(value="")
     */
    public $currency;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("percentVAT")
     *
     * @FakeMockField(value="")
     */
    public $percentVAT;

    /**
     * @var array|Service[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Response\Calculator\Service>")
     * @Serializer\SerializedName("services")
     */
    public $services;
}
