<?php
declare(strict_types=1);

/**
 * ReportingCloud PHP SDK
 *
 * PHP SDK for ReportingCloud Web API. Authored and supported by Text Control GmbH.
 *
 * @link      https://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://github.com/TextControl/txtextcontrol-reportingcloud-php for the canonical source repository
 * @license   https://raw.githubusercontent.com/TextControl/txtextcontrol-reportingcloud-php/master/LICENSE.md
 * @copyright © 2019 Text Control GmbH
 */

namespace TxTextControl\ReportingCloud\PropertyMap;

/**
 * ModifiedDocument property map
 *
 * @package TxTextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class ModifiedDocument extends AbstractPropertyMap
{
    /**
     * Set the property map of ModifiedDocument
     */
    public function __construct()
    {
        $map = [
            'document' => 'document',
            'removed'  => 'removed',
        ];

        $this->setMap($map);
    }
}