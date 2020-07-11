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

use SaaS\Exception\ApiException;

/**
 * @category Cdek
 * @package  SaaS\Service\Cdek\Exception
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class CdekApiException extends ApiException
{
    /** @var array */
    private $errors = [];

    /** @var array */
    private $warnings = [];

    public function __construct(array $errors, array $warnings = [])
    {
        parent::__construct("Api exception.");

        $this->errors = $errors;
        $this->warnings = $warnings;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getWarnings(): array
    {
        return $this->warnings;
    }
}
