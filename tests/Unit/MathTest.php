<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Furbook\Math;

class MathTest extends TestCase
{
    public function setUp()
    {
      dump('da qua set up');
    }

    public function tearDown()
    {
      dump('da qua ham tearDown');
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testSumNumber()
    {
      // a is not number
      $result = Math::sumNumber('a', 5);
      $this->assertEquals($result, 'a is not number');

      // b is not number
      $result = Math::sumNumber(4, 'b');
      $this->assertEquals($result, 'b is not number');

      // a and b are number
      $result = Math::sumNumber(4, 6);
      $this->assertEquals($result, 10);

      $result = Math::sumNumber(2, 1);
      $this->assertEquals($result, 3);

    }
}
