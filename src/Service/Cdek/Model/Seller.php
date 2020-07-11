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
 * Class Seller
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
class Seller
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
     * @Serializer\SerializedName("inn")
     *
     * @FakeMockField(value="")
     */
    public $inn;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("phone")
     *
     * @FakeMockField(value="")
     */
    public $phone;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ownership_form")
     *
     * @FakeMockField(value="")
     */
    public $ownershipForm;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address")
     *
     * @FakeMockField(value="")
     */
    public $address;
}
