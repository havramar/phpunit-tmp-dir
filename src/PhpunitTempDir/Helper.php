<?php

namespace PhpunitTempDir;

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;

/**
 * Simple wrapper around vfs for easier usage.
 *
 * @package PhpunitTempDir
 */
class Helper
{
    /**
     * @var vfsStreamDirectory
     */
    static private $root;

    /**
     * Return path to create a temporary directory.
     * Every new call deletes content of previous one.

     * @param string $rootName Different route name
     *
     * @return string
     */
    static public function createTempDir($rootName = 'root')
    {
        self::$root = vfsStream::setup($rootName);

        return vfsStream::url($rootName) . DIRECTORY_SEPARATOR;
    }
}
