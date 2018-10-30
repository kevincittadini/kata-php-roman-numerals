<?php

namespace Numerals\Test;

use Numerals\Numerals;
use PHPUnit\Framework\TestCase;

class NumeralsTest extends TestCase
{

    /**
     * @test
     */
    public function cannotConvertToRomanZeroOrNegative()
    {
        $this->assertFalse(Numerals::toRoman(0));
        $this->assertFalse(Numerals::toRoman(-10));
    }

    /**
     * @test
     */
    public function simpleArabToRoman()
    {
        $this->assertEquals('I', Numerals::toRoman(1));
        $this->assertEquals('II', Numerals::toRoman(2));
        $this->assertEquals('III', Numerals::toRoman(3));
    }
}