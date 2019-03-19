<?php

namespace ConsoleGames\Games\Gcd;

use function ConsoleGames\Flow\buildEngine;
use function ConsoleGames\Utils\gcd;

function getCorrectAnswer(int $firstNumber, int $secondNumber)
{
    $result = gcd($firstNumber, $secondNumber);
    return (string) $result;
}

function run()
{
    $rules = 'Find the greatest common divisor of given numbers';

    $getQA = function (int $maxNumber = 100) {
        $firstNumber = rand(1, $maxNumber);
        $secondNumber = rand(1, $maxNumber);
    
        $question = "${firstNumber} ${secondNumber}";
        $correctAnswer = getCorrectAnswer($firstNumber, $secondNumber);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine($rules, $getQA);
}
