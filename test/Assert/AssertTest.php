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

namespace TxTextControlTest\ReportingCloud\Assert;

use PHPUnit\Framework\TestCase;

/**
 * Class AssertTest
 *
 * @package TxTextControlTest\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class AssertTest extends TestCase
{
    use AssertApiKeyTestTrait;
    use AssertBase64DataTestTrait;
    use AssertCultureTestTrait;
    use AssertDateTimeTestTrait;
    use AssertDocumentDividerTestTrait;
    use AssertDocumentExtensionTestTrait;
    use AssertDocumentThumbnailExtensionTestTrait;
    use AssertImageFormatTestTrait;
    use AssertLanguageTestTrait;
    use AssertPageTestTrait;
    use AssertReturnFormatTestTrait;
    use AssertTemplateExtensionTestTrait;
    use AssertTemplateFormatTestTrait;
    use AssertTemplateNameTestTrait;
    use AssertTimestampTestTrait;
    use AssertZoomFactorTestTrait;
    use AssertFilenameExistsTestTrait;
    use AssertOneOfTraitTest;
    use AssertRangeTraitTest;
    use AssertArrayTraitTest;
    use AssertStringTraitTest;
    use AssertIntegerTraitTest;
    use AssertBooleanTraitTest;
}
