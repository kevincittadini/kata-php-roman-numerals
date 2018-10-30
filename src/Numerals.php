<?php

namespace Numerals;

class Numerals
{

    const ARAB_TO_ROMAN_TABLE = [
        1  => 'I',
        4  => 'IV',
        5  => 'V',
        9  => 'IX',
        10 => 'X'
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

        if (isset(self::ARAB_TO_ROMAN_TABLE[$arabNumeral])) {
            return self::ARAB_TO_ROMAN_TABLE[$arabNumeral];
        }

        $result       = '';
        $numbersTable = array_reverse(self::ARAB_TO_ROMAN_TABLE, true);

        foreach ($numbersTable as $arabKey => $romanNumeral) {
            for (; $arabNumeral >= $arabKey; $arabNumeral -= $arabKey) {
                $result .= $romanNumeral;
            }
        }

        return $result;
    }
}