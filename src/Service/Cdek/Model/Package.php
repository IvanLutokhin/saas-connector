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
 * Class Package
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
class Package
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("number")
     *
     * @FakeMockField(value="")
     */
    public $number;

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
     * @Serializer\SerializedName("length")
     *
     * @FakeMockField(value="")
     */
    public $length;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("width")
     *
     * @FakeMockField(value="")
     */
    public $width;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     *
     * @FakeMockField(value="")
     */
    public $height;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("comment")
     *
     * @FakeMockField(value="")
     */
    public $comment;

    /**
     * @var array|Item[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Item>")
     * @Serializer\SerializedName("items")
     */
    public $items;
}
