<?php

class FizzBuzz_test extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass() : void
    {
        require_once 'FizzBuzz.php';
        $object = new FizzBuzz();
        ob_start();
        $result = $object->FizzBuzzOneHundred();
        ob_get_clean();
    }

    public function test1() : void
    {
        $this->assertSame('1', );
    }

    public function test2() : void
    {
        $this->assertSame('II', toRoman(2));
    }

    public function test3() : void
    {
        $this->assertSame('III', toRoman(3));
    }

    public function test4() : void
    {
        $this->assertSame('IV', toRoman(4));
    }

    public function test5() : void
    {
        $this->assertSame('V', toRoman(5));
    }

    public function test6() : void
    {
        $this->assertSame('VI', toRoman(6));
    }

    public function test9() : void
    {
        $this->assertSame('IX', toRoman(9));
    }

}