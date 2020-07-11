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
 * Class Order
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
class Order
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("order_uuid")
     *
     * @FakeMockField(value="")
     */
    public $orderUuid;

    /**
     * @var double
     *
     * @Serializer\Type("double")
     * @Serializer\SerializedName("cdek_number")
     *
     * @FakeMockField(value="")
     */
    public $cdekNumber;
}
