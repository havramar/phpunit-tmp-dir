<?php

class HelperTest extends \PHPUnit_Framework_TestCase
{
    protected $customname = 'customname';

    public function testCreatingTempDirectoryDestroysPreviousOne()
    {
        $firstPath = \PhpunitTempDir\Helper::createTempDir();

        $this->assertEquals('vfs://root/', $firstPath);
        $this->assertFileExists($firstPath);

        $customPath = \PhpunitTempDir\Helper::createTempDir('custom');

        $this->assertEquals('vfs://custom/', $customPath);
        $this->assertFileExists($customPath);

        $this->assertFileNotExists($firstPath);
    }
}
