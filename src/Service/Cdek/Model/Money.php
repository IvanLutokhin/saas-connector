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
 * Class Money
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
class Money
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("value")
     *
     * @FakeMockField(value="100.0")
     */
    public $value;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("vat_sum")
     *
     * @FakeMockField(value="20.0")
     */
    public $vatSum;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("vat_rate")
     *
     * @FakeMockField(value="20")
     */
    public $vatRate;
}
