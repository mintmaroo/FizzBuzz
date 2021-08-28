<?php


class FizzBuzz
{

    public function __construct()
    {
    }

    public function FizzBuzzOneHundred()
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

    public function getFizzBuzzForOneNumber($number) {
        if (($number % 3 == 0) and ($number % 5 == 0)) {
            return "Fizz Buzz";
        } else if ($number % 3 == 0) {
            return "Fizz";
        } else if ($number % 5 == 0) {
            return "Buzz";
        } else {
            return $number;
        }
    }
}

$obj = new FizzBuzz();
$obj->FizzBuzzOneHundred();