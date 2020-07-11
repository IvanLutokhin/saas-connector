<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Service\Cdek\Model\Response\OAuth
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Response\OAuth;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ErrorResponse
 *
 * @package  SaaS\Service\Cdek\Model\Response\OAuth
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class ErrorResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("error")
     *
     * @FakeMockField(value="invalid_client")
     */
    public $error;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("error_description")
     *
     * @FakeMockField(value="Bad client credentials")
     */
    public $errorDescription;
}
