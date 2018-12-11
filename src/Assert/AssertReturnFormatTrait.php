<?php
declare(strict_types=1);

/**
 * ReportingCloud PHP Wrapper
 *
 * PHP wrapper for ReportingCloud Web API. Authored and supported by Text Control GmbH.
 *
 * @link      https://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://github.com/TextControl/txtextcontrol-reportingcloud-php for the canonical source repository
 * @license   https://raw.githubusercontent.com/TextControl/txtextcontrol-reportingcloud-php/master/LICENSE.md
 * @copyright © 2019 Text Control GmbH
 */

namespace TxTextControl\ReportingCloud\Assert;

/**
 * Trait AssertReturnFormatTrait
 *
 * @package TxTextControl\ReportingCloud\Assert
 */
trait AssertReturnFormatTrait
{
    /**
     * Validate return format extension
     *
     * @param string $value
     * @param string $message
     *
     * @return null
     */
    public static function assertReturnFormat(string $value, string $message = '')
    {
        $ucValue = strtoupper($value);

        if (!in_array($ucValue, self::$returnFormats)) {
            $format  = '%s contains an unsupported return format file extension';
            $message = sprintf($message ?: $format, static::valueToString($value));
            static::reportInvalidArgument($message);
        }

        return null;
    }
}
