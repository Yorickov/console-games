<?php

namespace ConsoleGames\Games\Even;

use function ConsoleGames\Flow\buildEngine;
use function ConsoleGames\Utils\isEven;

function getCorrectAnswer(int $question)
{
    return isEven($question) ? 'yes' : 'no';
}

function run()
{
    $rules = 'Answer "yes" if number is even otherwise answer "no"';

    $getQA = function (int $minNumber = 1, int $maxNumber = 100) {
        $question = rand($minNumber, $maxNumber);
        $correctAnswer = getCorrectAnswer($question);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine($rules, $getQA);
}
