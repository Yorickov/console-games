<?php

namespace ConsoleGames\Utils;

function isEven(int $number)
{
    return $number % 2 === 0;
}

// phpcs:disable
function isPrime(int $num)
{
    $iter = function (int $count) use ($num, &$iter) {
        if ($count === 1) {
            return true;
        }
        return ($count === 0 || $num % $count === 0) ? false : $iter($count - 1);
    };
    return $iter($num - 1);
};

function gcd(int $a, int $b)
{
    if ($a > $b) {
        $result = $a % $b;
        return $result === 0 ? $b : gcd($result, $b);
    }
    return gcd($b, $a);
};

// phpcs:enable
function fillArray(int $length, int $first, int $step)
{
    $iter = function (int $count, int $item, array $arr) use ($step, &$iter) {
        if ($count === 0) {
            return $arr;
        }
        $arr[] = $item;
        return $iter($count - 1, $item + $step, $arr);
    };
    return $iter($length, $first, []);
}

function balance(array $arr)
{
    $min = min($arr);
    $max = max($arr);
    if ($max - $min <= 1) {
        return $arr;
    }

    $minIndex = array_search($min, $arr);
    $maxIndex = array_search($max, $arr);

    array_splice($arr, $maxIndex, 1, $max - 1);
    array_splice($arr, $minIndex, 1, $min + 1);
    
    return balance($arr);
}
