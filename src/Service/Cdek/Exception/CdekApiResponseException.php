<?php

/**
 * PHP version 7.1
 *
 * @category Cdek
 * @package  SaaS\Service\Cdek\Exception
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Exception;

/**
 * @category Cdek
 * @package  SaaS\Service\Cdek\Exception
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class CdekApiResponseException extends CdekApiException
{
    /** @var string */
    private $response;

    public function __construct(string $response, array $errors, array $warnings = [])
    {
        parent::__construct($errors, $warnings);

        $this->response = $response;
    }

    public function getResponse(): string
    {
        return $this->response;
    }
}
