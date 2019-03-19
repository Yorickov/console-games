<?php

namespace ConsoleGames\Games\Calc;

use function ConsoleGames\Flow\buildEngine;

function getCorrectAnswer(int $firstNumber, int $secondNumber, string $sign)
{
    $result;
    switch ($sign) {
        case '+':
            $result = $firstNumber + $secondNumber;
            break;
        case '-':
            $result = $firstNumber - $secondNumber;
            break;
        default:
            $result = $firstNumber * $secondNumber;
    }
    return (string) $result;
}

function run()
{
    $rules = 'What is the result of the expression?';

    $getQA = function (int $maxNumber = 100) {
        $firstNumber = rand(1, $maxNumber);
        $secondNumber = rand(1, $maxNumber);
        $signs = ['+', '-', '*'];
        $chooseSign = $signs[rand(0, 2)];
        
        $question = "${firstNumber} ${chooseSign} ${secondNumber}";
        $correctAnswer = getCorrectAnswer($firstNumber, $secondNumber, $chooseSign);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine($rules, $getQA);
}
