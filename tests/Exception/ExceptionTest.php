<?php

/**
 * @file
 * PHPUnit tests for Exception.
 */

use PHPUnit\Framework\TestCase;
use Shutterstock\Main\Exception\ShutterstockException;

class ExceptionTest extends TestCase {

    public function testToString() {
      $exception = new ShutterstockException('error', '500');
      $this->assertEquals("Shutterstock\Main\Exception\ShutterstockException: [500]: error\n", $exception->__toString());
    }

}
