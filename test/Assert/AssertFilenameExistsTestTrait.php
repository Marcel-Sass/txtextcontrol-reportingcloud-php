<?php

namespace TxTextControlTest\ReportingCloud\Assert;

use InvalidArgumentException;
use TxTextControl\ReportingCloud\Assert\Assert;

trait AssertFilenameExistsTestTrait
{
    public function testAssertFilenameExists()
    {
        $filename = tempnam(sys_get_temp_dir(), md5(__CLASS__));
        touch($filename);
        $this->assertNull(Assert::filenameExists($filename));
        unlink($filename);
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage "/path/to/invalid/file" must contain the absolute path and file
     */
    public function testAssertFilenameExistsInvalid()
    {
        Assert::filenameExists('/path/to/invalid/file');
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Custom error message ("/path/to/invalid/file")
     */
    public function testAssertFilenameExistsInvalidWithCustomMessage()
    {
        Assert::filenameExists('/path/to/invalid/file', 'Custom error message (%s)');
    }
}