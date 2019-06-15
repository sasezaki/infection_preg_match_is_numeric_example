<?php

namespace Foo;

class Util
{
    public static function is_phone_number(string $phone_number): bool
    {
        $phone_number = str_replace('-', '', $phone_number);

        $length = strlen($phone_number);
        if ($length < 10 || $length > 11) {
            return false;
        }

        return preg_match('/\A[0-9]+\z/', $phone_number);
    }
}
