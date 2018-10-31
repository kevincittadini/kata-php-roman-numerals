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

    /**
     * @test
     */
    public function complexArabToRoman()
    {
        $this->assertEquals('XXX', Numerals::toRoman(30));
        $this->assertEquals('XXXIX', Numerals::toRoman(39));
        $this->assertEquals('XL', Numerals::toRoman(40));
        $this->assertEquals('XLIV', Numerals::toRoman(44));
        $this->assertEquals('XLIX', Numerals::toRoman(49));
        $this->assertEquals('L', Numerals::toRoman(50));
        $this->assertEquals('LXXVIII', Numerals::toRoman(78));
        $this->assertEquals('XCIX', Numerals::toRoman(99));

        $this->assertEquals('MCMXCII', Numerals::toRoman(1992));
        $this->assertEquals('MMXVIII', Numerals::toRoman(2018));
    }

    /**
     * @test
     */
    public function cannotConvertToArabEmptyValue()
    {
        $this->assertFalse(Numerals::toArab(''));
    }

    /**
     * @test
     */
    public function tensRomanToArab()
    {
        $this->assertEquals(1, Numerals::toArab('I'));
        $this->assertEquals(2, Numerals::toArab('II'));
        $this->assertEquals(3, Numerals::toArab('III'));
        $this->assertEquals(4, Numerals::toArab('IV'));
        $this->assertEquals(5, Numerals::toArab('V'));
        $this->assertEquals(6, Numerals::toArab('VI'));
        $this->assertEquals(7, Numerals::toArab('VII'));
        $this->assertEquals(8, Numerals::toArab('VIII'));
        $this->assertEquals(9, Numerals::toArab('IX'));
        $this->assertEquals(10, Numerals::toArab('X'));
    }
}