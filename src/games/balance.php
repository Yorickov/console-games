<?php

namespace ConsoleGames\Games\Balance;

use function ConsoleGames\Flow\buildEngine;
use function ConsoleGames\Utils\balance;

const RULES = 'Balance the given number';

function getCorrectAnswer(array $arr)
{
    $cloneArr = $arr;
    sort($cloneArr);
    return implode('', $cloneArr);
}

function run()
{
    $getQA = function (int $maxNumber = 1000) {
        $question = (string) rand(10, $maxNumber);
        $arrNumber = str_split($question);
        $balanced = balance($arrNumber);

        $correctAnswer = getCorrectAnswer($balanced);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine(RULES, $getQA);
}
