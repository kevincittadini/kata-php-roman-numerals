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
    public function tensArabToRoman()
    {
        $this->assertEquals('I', Numerals::toRoman(1));
        $this->assertEquals('II', Numerals::toRoman(2));
        $this->assertEquals('III', Numerals::toRoman(3));
        $this->assertEquals('IV', Numerals::toRoman(4));
        $this->assertEquals('V', Numerals::toRoman(5));
        $this->assertEquals('VI', Numerals::toRoman(6));
        $this->assertEquals('VII', Numerals::toRoman(7));
        $this->assertEquals('VIII', Numerals::toRoman(8));
        $this->assertEquals('IX', Numerals::toRoman(9));
        $this->assertEquals('X', Numerals::toRoman(10));
    }

    /**
     * @test
     */
    public function moreTensArabToRoman()
    {
        $this->assertEquals('XI', Numerals::toRoman(11));
        $this->assertEquals('XII', Numerals::toRoman(12));
        $this->assertEquals('XIII', Numerals::toRoman(13));
        $this->assertEquals('XIV', Numerals::toRoman(14));
        $this->assertEquals('XV', Numerals::toRoman(15));
        $this->assertEquals('XVI', Numerals::toRoman(16));
        $this->assertEquals('XVII', Numerals::toRoman(17));
        $this->assertEquals('XVIII', Numerals::toRoman(18));
        $this->assertEquals('XIX', Numerals::toRoman(19));
        $this->assertEquals('XX', Numerals::toRoman(20));
    }
}