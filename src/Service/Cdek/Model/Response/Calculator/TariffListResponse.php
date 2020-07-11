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
use JMS\Serializer\Annotation as Serializer;

/**
 * Class TariffListResponse
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
class TariffListResponse
{
    /**
     * @var array|Tariff[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Response\Calculator\Tariff>")
     * @Serializer\SerializedName("result")
     */
    public $tariffs;
}
