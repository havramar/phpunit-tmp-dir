phpunit-tmp-dir
===============

Wrapper around [vfsStream](https://github.com/mikey179/vfsStream) for easier creation temporary directories in phpunit tests.

## Why

Needed extremely simple way of creating temporary folder, whose content is deleted when tests are finished.

## How to run

1. Get [composer](https://getcomposer.org/)
2. Create example file:

  ```php
  <?php
  
  require_once 'vendor/autoload.php';
  
  $path = \PhpunitTempDir\Helper::createTempDir();
  
  // do whatever you want inside $path (mkdir, touch etc),
  // when script exits, everything is gone as all is happening in memory
  ```
