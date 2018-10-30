<?php

namespace Numerals;

class Numerals
{
    const ARAB_TO_ROMAN_TABLE = [
        1 => 'I',
    ];

    /**
     * @param $arabNumeral
     *
     * @return bool|string
     */
    public static function toRoman($arabNumeral)
    {
        if ($arabNumeral < 1) {
            return false;
        }

        return self::ARAB_TO_ROMAN_TABLE[$arabNumeral];
    }
}