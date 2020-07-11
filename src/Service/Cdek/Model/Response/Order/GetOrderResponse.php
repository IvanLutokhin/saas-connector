<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Order
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Response\Order;

use Er1z\FakeMock\Annotations\FakeMock;
use JMS\Serializer\Annotation as Serializer;
use SaaS\Service\Cdek\Model\RelatedEntity;
use SaaS\Service\Cdek\Model\Request;

/**
 * Class GetOrderResponse
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Order
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class GetOrderResponse
{
    /**
     * @var OrderEntity
     *
     * @Serializer\Type("SaaS\Service\Cdek\Model\Response\Order\OrderEntity")
     * @Serializer\SerializedName("entity")
     */
    public $entity;

    /**
     * @var array|Request[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Request>")
     * @Serializer\SerializedName("requests")
     */
    public $requests;

    /**
     * @var array|RelatedEntity[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\RelatedEntity>")
     * @Serializer\SerializedName("related_entities")
     */
    public $relatedEntities;
}
