<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Request
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Request;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetRegionListRequest
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class GetRegionListRequest
{
    /**
     * @var array|string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("country_codes")
     */
    public $countryCodes;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("region_code")
     *
     * @FakeMockField(value="")
     */
    public $regionCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladr_region_code")
     *
     * @FakeMockField(value="")
     */
    public $kladrRegionCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fias_region_guid")
     *
     * @FakeMockField(value="")
     */
    public $fiasRegionGuid;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("size")
     *
     * @FakeMockField(value="3")
     */
    public $size;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("page")
     *
     * @FakeMockField(value="")
     */
    public $page;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lang")
     *
     * @FakeMockField(value="")
     */
    public $lang;
}
