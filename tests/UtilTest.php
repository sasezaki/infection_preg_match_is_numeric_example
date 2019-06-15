<?php

namespace FooTest;

use Foo\Util;
use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{
    public function testIs_phone_number()
    {
        $this->assertTrue(Util::is_phone_number('09012345678'));
        $this->assertTrue(Util::is_phone_number('090-1234-5678'));
        $this->assertTrue(Util::is_phone_number('0281234567'));
        $this->assertTrue(Util::is_phone_number('028-123-4567'));
        $this->assertFalse(Util::is_phone_number('090123456789'));
        $this->assertFalse(Util::is_phone_number('090123456'));
//        $this->assertFalse(Util::is_phone_number('9.12345678'));
    }
}
