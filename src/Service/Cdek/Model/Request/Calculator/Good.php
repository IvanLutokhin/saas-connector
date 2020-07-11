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
 * Class Good
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
class Good
{
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
     * @FakeMockField(value="100")
     */
    public $length;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("width")
     *
     * @FakeMockField(value="100")
     */
    public $width;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     *
     * @FakeMockField(value="100")
     */
    public $height;
}
