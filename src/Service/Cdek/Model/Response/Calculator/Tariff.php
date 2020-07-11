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
 * Class Tariff
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
class Tariff
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("tariffId")
     *
     * @FakeMockField(value="1")
     */
    public $tariffId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     *
     * @FakeMockField(value="true")
     */
    public $status;

    /**
     * @var Price
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Response\Calculator\Price")
     * @Serializer\SerializedName("result")
     */
    public $price;
}
