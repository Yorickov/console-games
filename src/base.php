<?php

namespace ConsoleGames\Base;

function isEven(int $number)
{
    return $number % 2 === 0;
}

function check(int $number)
{
    $result = isEven($number) ? 'yes' : 'no';
    echo $result . PHP_EOL;
}
