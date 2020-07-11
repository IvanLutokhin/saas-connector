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
 * Class Contact
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
class Contact
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("company")
     *
     * @FakeMockField(value="")
     */
    public $company;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     *
     * @FakeMockField(value="Петров Петр")
     */
    public $name;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     *
     * @FakeMockField(value="petrov@mail.ru")
     */
    public $email;

    /**
     * @var array|Phone[]
     *
     * @Serializer\Type("array<SaaS\Service\Cdek\Model\Phone>")
     * @Serializer\SerializedName("phones")
     */
    public $phones;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("passport_series")
     *
     * @FakeMockField(value="1234")
     */
    public $passportSeries;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("passport_number")
     *
     * @FakeMockField(value="123456")
     */
    public $passportNumber;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("passport_date_of_issue")
     *
     * @FakeMockField(value="2020-01-01")
     */
    public $passportDateOfIssue;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("passport_organization")
     *
     * @FakeMockField(value="УФМС")
     */
    public $passportOrganization;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("passport_date_of_birth")
     *
     * @FakeMockField(value="1990-01-01")
     */
    public $passportDateOfBirth;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tin")
     *
     * @FakeMockField(value="")
     */
    public $tin;
}
