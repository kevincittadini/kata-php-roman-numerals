<?php

namespace Numerals;

class Numerals
{

    const ARAB_ROMAN_TABLE = [
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        400  => 'CD',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I',
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

        if (isset(self::ARAB_ROMAN_TABLE[$arabNumeral])) {
            return self::ARAB_ROMAN_TABLE[$arabNumeral];
        }

        $result = '';

        foreach (self::ARAB_ROMAN_TABLE as $arabKey => $romanNumeral) {
            for (; $arabNumeral >= $arabKey; $arabNumeral -= $arabKey) {
                $result .= $romanNumeral;
            }
        }

        return $result;
    }


    /**
     * @param $romanNumeral
     *
     * @return bool|int
     */
    public static function toArab($romanNumeral)
    {
        if (empty($romanNumeral)) {
            return false;
        }

        $result = 0;

        for ($strPosition = 0; $strPosition < strlen($romanNumeral); $strPosition++) {
            $candidate = array_search($romanNumeral[$strPosition], self::ARAB_ROMAN_TABLE);

            if ($candidate) {
                if ($romanNumeral[$strPosition+1] > $romanNumeral[$strPosition]) {
                    $nextCandidate = array_search($romanNumeral[$strPosition] . $romanNumeral[$strPosition+1], self::ARAB_ROMAN_TABLE);
                    $result += $nextCandidate;
                    $strPosition++;
                } else {
                    $result += $candidate;
                }
            }
        }

        return $result;
    }

}