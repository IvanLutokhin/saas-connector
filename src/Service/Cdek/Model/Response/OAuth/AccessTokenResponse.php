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
 * Class AccessTokenResponse
 *
 * @package  SaaS\Service\Cdek\Model\Response\OAuth
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class AccessTokenResponse
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("access_token")
     *
     * @FakeMockField(value="00000000-0000-0000-0000-000000000000")
     */
    public $accessToken;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("token_type")
     *
     * @FakeMockField(value="bearer")
     */
    public $tokenType;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("expires_in")
     *
     * @FakeMockField(value="600")
     */
    public $expiresIn;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("scope")
     *
     * @FakeMockField(value="order:all payment:all")
     */
    public $scope;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("scope")
     *
     * @FakeMockField(value="5c856ae6-7d70-435c-9140-aff68403b2f4")
     */
    public $jti;
}
