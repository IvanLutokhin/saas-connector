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
 * Class Service
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
class Service
{
    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     *
     * @FakeMockField(value="1")
     */
    public $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("title")
     *
     * @FakeMockField(value="")
     */
    public $title;

    /**
     * @var float
     *
     * @Serializer\Type("Sfloat")
     * @Serializer\SerializedName("price")
     */
    public $price;

    /**
     * @var float
     *
     * @Serializer\Type("Sfloat")
     * @Serializer\SerializedName("rate")
     */
    public $rate;
}
