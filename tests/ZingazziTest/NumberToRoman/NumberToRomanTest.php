<?php

use Zingazzi\NumberToRoman\NumberToRoman;

class NumberToRomanTest extends PHPUnit_Framework_TestCase
{
    public function test_convert_number_1()
    {
        $this->assertEquals('I', NumberToRoman::convert(1));
    }

    public function test_convert_number_2()
    {
        $this->assertEquals('II', NumberToRoman::convert(2));
    }

    public function test_convert_number_4()
    {
        $this->assertEquals('IV', NumberToRoman::convert(4));
    }

    public function test_convert_number_5()
    {
        $this->assertEquals('AV', NumberToRoman::convert(5));
    }

    public function test_convert_number_9()
    {
        $this->assertEquals('IX', NumberToRoman::convert(9));
    }

    public function test_convert_number_10()
    {
        $this->assertEquals('X', NumberToRoman::convert(10));
    }

    public function test_convert_number_40()
    {
        $this->assertEquals('XL', NumberToRoman::convert(40));
    }

    public function test_convert_number_50()
    {
        $this->assertEquals('L', NumberToRoman::convert(50));
    }

    public function test_convert_number_90()
    {
        $this->assertEquals('XC', NumberToRoman::convert(90));
    }

    public function test_convert_number_100()
    {
        $this->assertEquals('C', NumberToRoman::convert(100));
    }

    public function test_convert_number_400()
    {
        $this->assertEquals('CD', NumberToRoman::convert(400));
    }

    public function test_convert_number_500()
    {
        $this->assertEquals('D', NumberToRoman::convert(500));
    }    

    public function test_convert_number_100()
    {
        $this->assertEquals('CM', NumberToRoman::convert(900));
    }

    public function test_convert_number_1000()
    {
        $this->assertEquals('M', NumberToRoman::convert(1000));
    }

    public function test_convert_number_1999()
    {
        $this->assertEquals('MCMXCIX', NumberToRoman::convert(1000));
    }

}