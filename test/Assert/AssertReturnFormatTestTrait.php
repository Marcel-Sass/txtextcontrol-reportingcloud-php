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

use TxTextControl\ReportingCloud\Exception\InvalidArgumentException;
use TxTextControl\ReportingCloud\Assert\Assert;

/**
 * Trait AssertReturnFormatTestTrait
 *
 * @package TxTextControlTest\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
trait AssertReturnFormatTestTrait
{
    // <editor-fold desc="Abstract methods">

    /**
     * @param mixed  $condition
     * @param string $message
     */
    abstract public static function assertTrue($condition, string $message = ''): void;

    // </editor-fold>

    public function testAssertReturnFormat(): void
    {
        Assert::assertReturnFormat('DOC');
        Assert::assertReturnFormat('doc');

        Assert::assertReturnFormat('DOCX');
        Assert::assertReturnFormat('docx');

        Assert::assertReturnFormat('HTML');
        Assert::assertReturnFormat('html');

        Assert::assertReturnFormat('PDF');
        Assert::assertReturnFormat('pdf');

        Assert::assertReturnFormat('PDFA');
        Assert::assertReturnFormat('pdfa');

        Assert::assertReturnFormat('RTF');
        Assert::assertReturnFormat('rtf');

        Assert::assertReturnFormat('TX');
        Assert::assertReturnFormat('tx');

        Assert::assertReturnFormat('TXT');
        Assert::assertReturnFormat('txt');

        $this->assertTrue(true);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage "xxx" contains an unsupported return format file extension
     */
    public function testAssertReturnFormatInvalid(): void
    {
        Assert::assertReturnFormat('xxx');
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Custom error message ("XXX")
     */
    public function testAssertReturnFormatInvalidWithCustomMessage(): void
    {
        Assert::assertReturnFormat('XXX', 'Custom error message ("%s")');
    }
}
