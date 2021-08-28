<?php


class FizzBuzz
{

    public function __construct()
    {
    }

    public function FizzBuzzOneHundred() : string
    {
        for ($i = 1; $i <= 100; $i++) {
            if (($i % 3 == 0) and ($i % 5 == 0)) {
                echo "Fizz Buzz ";
            } else if ($i % 3 == 0) {
                echo "Fizz ";
            } else if ($i % 5 == 0) {
                echo "Buzz ";
            } else {
                echo $i . " ";
            }
        }
    }

    public function getFizzBuzzForOneNumber(int $number) : string {
        if (($number % 3 == 0) and ($number % 5 == 0)) {
            return "Fizz Buzz";
        } else if ($number % 3 == 0) {
            return "Fizz";
        } else if ($number % 5 == 0) {
            return "Buzz";
        } else {
            return strval($number);
        }
    }
}

$obj = new FizzBuzz();
$obj->FizzBuzzOneHundred();