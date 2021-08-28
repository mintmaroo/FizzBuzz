<?php

class FizzBuzz_test extends PHPUnit\Framework\TestCase
{

    public static function setUpBeforeClass() : void
    {
        require_once 'FizzBuzz.php';
    }

    public function test1() : void
    {
        $object = new FizzBuzz();
        $result = $object->getFizzBuzzForOneNumber(1);
        $this->assertSame('1', $result);
    }

    public function test3() : void
    {
        $object = new FizzBuzz();
        $result = $object->getFizzBuzzForOneNumber(3);
        $this->assertSame('Fizz', $result);
    }

    public function test5() : void
    {
        $object = new FizzBuzz();
        $result = $object->getFizzBuzzForOneNumber(5);
        $this->assertSame('Buzz', $result);
    }

    public function test15() : void
    {
        $object = new FizzBuzz();
        $result = $object->getFizzBuzzForOneNumber(15);
        $this->assertSame('FizzBuzz', $result);
    }

    public function testAllToHundered() : void
    {
        $testString = '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 Fizz Buzz 16 17 Fizz 19 Buzz Fizz 22 23 Fizz Buzz 26 Fizz 28 29 Fizz Buzz 31 32 Fizz 34 Buzz Fizz 37 38 Fizz Buzz 41 Fizz 43 44 Fizz Buzz 46 47 Fizz 49 Buzz Fizz 52 53 Fizz Buzz 56 
        Fizz 58 59 Fizz Buzz 61 62 Fizz 64 Buzz Fizz 67 68 Fizz Buzz 71 Fizz 73 74 Fizz Buzz 76 77 Fizz 79 Buzz Fizz 82 83 Fizz Buzz 86 Fizz 88 89 Fizz Buzz 91 92 Fizz 94 Buzz Fizz 97 98 Fizz Buzz';
        $object = new FizzBuzz();
        ob_start();
        $result = $object->FizzBuzzOneHundred();
        ob_get_clean();
        $this->assertSame('Buzz', $result);
    }

}