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
 * Class Request
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
class Request
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("request_uuid")
     *
     * @FakeMockField(value="")
     */
    public $requestUuid;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     *
     * @FakeMockField(value="")
     */
    public $type;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date_time")
     *
     * @FakeMockField(value="")
     */
    public $dateTime;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("state")
     *
     * @FakeMockField(value="")
     */
    public $state;

    /**
     * @var array|Error[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Error>")
     * @Serializer\SerializedName("errors")
     */
    public $errors;

    /**
     * @var array|Warning[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Warning>")
     * @Serializer\SerializedName("warnings")
     */
    public $warnings;
}
