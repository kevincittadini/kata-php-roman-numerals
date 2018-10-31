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
    public function toRoman(int $arabNumeral)
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
    public function toArab(string $romanNumeral)
    {
        if (empty($romanNumeral)) {
            return false;
        }

        $result = 0;

        for ($numeralIndex = 0; $numeralIndex < strlen($romanNumeral); $numeralIndex++) {
            $numeralCharacter = $romanNumeral[$numeralIndex];
            if ($this->isNextCharacterBiggerThanCurrent($romanNumeral[$numeralIndex], $romanNumeral[$numeralIndex + 1])) {
                $numeralCharacter .= $romanNumeral[$numeralIndex + 1];
                $numeralIndex++;
            }

            $wantedNumber = $this->getArabFromRoman($numeralCharacter);
            if ($wantedNumber) {
                $result += $wantedNumber;
            }
        }

        return $result;
    }

    /**
     * @param $currentCharacter
     * @param $nextCharacter
     *
     * @return bool
     */
    private function isNextCharacterBiggerThanCurrent(string $currentCharacter, string $nextCharacter): bool
    {
        $currentNumber = $this->getArabFromRoman($currentCharacter);
        $nextNumber    = $this->getArabFromRoman($nextCharacter);

        return $currentNumber < $nextNumber;
    }

    /**
     * @param $romanNumeral
     *
     * @return false|int
     */
    private function getArabFromRoman(string $romanNumeral)
    {
        return array_search($romanNumeral, self::ARAB_ROMAN_TABLE);
    }
}