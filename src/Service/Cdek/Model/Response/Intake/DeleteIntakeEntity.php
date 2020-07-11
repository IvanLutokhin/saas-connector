<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Intake
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Response\Intake;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class DeleteIntakeEntity
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response\Intake
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class DeleteIntakeEntity
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("uuid")
     *
     * @FakeMockField(value="72753031-4b5f-4084-9b09-c50b84a23da6")
     */
    public $uuid;
}
