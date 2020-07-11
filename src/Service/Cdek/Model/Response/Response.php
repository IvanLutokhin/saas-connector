<?php

/**
 * PHP version 7.1
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  http://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace SaaS\Service\Cdek\Model\Response;

use SaaS\Exception\InvalidJsonException;
use SaaS\Service\Cdek\Exception\CdekApiResponseException;

/**
 * Class Response
 *
 * @category Models
 * @package  SaaS\Service\Cdek\Model\Response
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class Response extends \SaaS\Model\Response\Response
{
    /**
     * {@inheritDoc}
     */
    protected function serializeResponse(string $raw, string $className)
    {
        $response = json_decode($raw, true);

        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new InvalidJsonException(
                sprintf(
                    'Error json: %s | %s (raw: %s)',
                    $className,
                    json_last_error_msg(),
                    $raw
                )
            );
        }

        $errors = $warnings = [];
        foreach ($response['requests'] ?? [] as $request) {
            foreach ($request['errors'] ?? [] as $error) {
                $errors[$error['code']] = $error['message'];
            }

            foreach ($request['warnings'] ?? [] as $warning) {
                $warnings[$warning['code']] = $warning['message'];
            }
        }

        if (count($errors) > 0 || count($warnings) > 0) {
            throw new CdekApiResponseException($raw, $errors, $warnings);
        }

        try {
            return $this->serializer->deserialize($raw, $className, 'json');
        } catch (\Exception $exception) {
            throw new InvalidJsonException(
                sprintf(
                    'Error json: %s | %s (raw: %s)',
                    $className,
                    $exception->getMessage(),
                    $raw
                )
            );
        }
    }
}
