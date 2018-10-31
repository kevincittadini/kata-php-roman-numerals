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
        $this->assertFalse((new Numerals())->toRoman(0));
        $this->assertFalse((new Numerals())->toRoman(-10));
    }

    /**
     * @test
     */
    public function cannotConvertToArabEmptyValue()
    {
        $this->assertFalse((new Numerals())->toArab(''));
    }

    /**
     * @test
     */
    public function arabToRoman()
    {
        $this->assertEquals('I', (new Numerals())->toRoman(1));
        $this->assertEquals('II', (new Numerals())->toRoman(2));
        $this->assertEquals('III', (new Numerals())->toRoman(3));
        $this->assertEquals('IV', (new Numerals())->toRoman(4));
        $this->assertEquals('V', (new Numerals())->toRoman(5));
        $this->assertEquals('VI', (new Numerals())->toRoman(6));
        $this->assertEquals('VII', (new Numerals())->toRoman(7));
        $this->assertEquals('VIII', (new Numerals())->toRoman(8));
        $this->assertEquals('IX', (new Numerals())->toRoman(9));
        $this->assertEquals('X', (new Numerals())->toRoman(10));

        $this->assertEquals('XI', (new Numerals())->toRoman(11));
        $this->assertEquals('XII', (new Numerals())->toRoman(12));
        $this->assertEquals('XIII', (new Numerals())->toRoman(13));
        $this->assertEquals('XIV', (new Numerals())->toRoman(14));
        $this->assertEquals('XV', (new Numerals())->toRoman(15));
        $this->assertEquals('XVI', (new Numerals())->toRoman(16));
        $this->assertEquals('XVII', (new Numerals())->toRoman(17));
        $this->assertEquals('XVIII', (new Numerals())->toRoman(18));
        $this->assertEquals('XIX', (new Numerals())->toRoman(19));
        $this->assertEquals('XX', (new Numerals())->toRoman(20));

        $this->assertEquals('XXX', (new Numerals())->toRoman(30));
        $this->assertEquals('XXXIX', (new Numerals())->toRoman(39));
        $this->assertEquals('XL', (new Numerals())->toRoman(40));
        $this->assertEquals('XLIV', (new Numerals())->toRoman(44));
        $this->assertEquals('XLIX', (new Numerals())->toRoman(49));
        $this->assertEquals('L', (new Numerals())->toRoman(50));
        $this->assertEquals('LXXVIII', (new Numerals())->toRoman(78));
        $this->assertEquals('XCIX', (new Numerals())->toRoman(99));

        $this->assertEquals('MCMXCII', (new Numerals())->toRoman(1992));
        $this->assertEquals('MMXVIII', (new Numerals())->toRoman(2018));
    }

    /**
     * @test
     */
    public function romanToArab()
    {
        $this->assertEquals(1, (new Numerals())->toArab('I'));
        $this->assertEquals(2, (new Numerals())->toArab('II'));
        $this->assertEquals(3, (new Numerals())->toArab('III'));
        $this->assertEquals(4, (new Numerals())->toArab('IV'));
        $this->assertEquals(5, (new Numerals())->toArab('V'));
        $this->assertEquals(6, (new Numerals())->toArab('VI'));
        $this->assertEquals(7, (new Numerals())->toArab('VII'));
        $this->assertEquals(8, (new Numerals())->toArab('VIII'));
        $this->assertEquals(9, (new Numerals())->toArab('IX'));
        $this->assertEquals(10, (new Numerals())->toArab('X'));
        $this->assertEquals(1992, (new Numerals())->toArab('MCMXCII'));
        $this->assertEquals(2018, (new Numerals())->toArab('MMXVIII'));

    }
}