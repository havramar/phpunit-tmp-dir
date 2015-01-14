phpunit-tmp-dir
===============

Wrapper around [vfsStream](https://github.com/mikey179/vfsStream) for easier creation temporary directories in [PhpUnit](http://phpunit.de/) tests.

[![Build Status](https://travis-ci.org/havramar/phpunit-tmp-dir.svg?branch=master)](https://travis-ci.org/havramar/phpunit-tmp-dir)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5fb9272b-9b24-477b-bd3a-8ac9c4eb8844/mini.png)](https://insight.sensiolabs.com/projects/5fb9272b-9b24-477b-bd3a-8ac9c4eb8844)

## Why

Needed extremely simple way of creating temporary folder, whose content is deleted when tests are finished.

## How to run

1. Get [composer](https://getcomposer.org/).
2. `composer require havramar/phpunit-tmp-dir:dev-master`
2. Create example file:

  ```php
  <?php
  
  require_once 'vendor/autoload.php';
  
  $path = \PhpunitTempDir\Helper::createTempDir();
  
  // do whatever you want inside $path (mkdir, touch etc),
  // when script exits, everything is gone as all is happening in memory
  ```
