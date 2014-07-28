<?php

class HelperTest extends \PHPUnit_Framework_TestCase
{
    protected $customname = 'customname';

    public function testCreatingTempDirectoryDestroysPreviousOne()
    {
        $firstPath = \PhpunitTempDir\Helper::createTempDir();

        $this->assertEquals('vfs://root/', $firstPath);

        mkdir($firstPath . 'loremipsum');

        $this->assertFileExists($firstPath . 'loremipsum');

        $customPath = \PhpunitTempDir\Helper::createTempDir();

        $this->assertEquals('vfs://root/', $customPath);
        $this->assertFileExists($customPath);

        $this->assertFileNotExists($firstPath . 'loremipsum');
    }
}
