<?php

namespace ConsoleGames\Games\Calc;

use function ConsoleGames\Flow\buildEngine;

const RULES = 'What is the result of the expression?';

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
    $getQA = function (int $maxNumber = 100) {
        $firstNumber = rand(1, $maxNumber);
        $secondNumber = rand(1, $maxNumber);
        $signs = ['+', '-', '*'];
        $chooseSign = $signs[array_rand($signs)];
        
        $question = "${firstNumber} ${chooseSign} ${secondNumber}";
        $correctAnswer = getCorrectAnswer($firstNumber, $secondNumber, $chooseSign);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine(RULES, $getQA);
}
