<?php

namespace FizzBuzz\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

require './src/FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider provideRanges
     */
    public function testFizzBuzzThreeFive($start, $end, $expected)
    {
        $fizzbuzz = new FizzBuzz();
        $output = $fizzbuzz->outputFizzBuzz($start, $end);
        $val = $output;
        $this->assertEquals(
            $expected,
            $val,
            "The output should equal {$expected}"
        );
    }

    public function provideRanges()
    {
        return [

            [PHP_INT_MIN, PHP_INT_MAX, "Range too small or large"],
            [null, null, "Invalid Range Whole Numbers Only Please"],
            ["", "", "Invalid Range Whole Numbers Only Please"],
            ["!", "*", "Invalid Range Whole Numbers Only Please"],
            ["a", "c", "Invalid Range Whole Numbers Only Please"],
            [1, "c", "Invalid Range Whole Numbers Only Please"],
            ["a", 2, "Invalid Range Whole Numbers Only Please"],
            [0, 0, "fizzbuzz"],
            [-3, 3, "lucky -2 -1 fizzbuzz 1 2 lucky"],
            [-3.3, 3.3, "Invalid Range Whole Numbers Only Please"],
            [1, 3, "1 2 lucky"],
            [3, 5, "lucky 4 buzz"],
            [1, 5, "1 2 lucky 4 buzz"],
            [1, 15, "1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz"],
            [1, 20, "1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz"],
            [90, 93, "fizzbuzz 91 92 lucky"]
        ];
    }

    /**
     * @dataProvider reportStrings
     */


    public function testFizzBuzzCreateReport($string, $expected)
    {
        $fizzbuzz = new FizzBuzz();
        $output = $fizzbuzz->createReport($string);

        $this->assertEquals(
            $expected,
            $output,
            "The output should equal {$expected}"
        );
    }

    public function reportStrings()
    {
        $expectedReportOne = "fizz: 4\nbuzz: 3\nfizzbuzz: 1\nlucky: 2\ninteger: 10";
        $expectedReportTwo =  "fizz: 1\nbuzz: 1\nfizzbuzz: 0\nlucky: 1\ninteger: 3";
        return [
            ['1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz', $expectedReportOne],
            ['1 2 lucky 4 buzz fizz', $expectedReportTwo],
            ['', "No Data for Report"],
            [1221434, "Only a number"]

        ];
    }


}