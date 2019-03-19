<?php

namespace ConsoleGames\Games\Even;

use function ConsoleGames\Flow\buildEngine;
use function ConsoleGames\Utils\isEven;

function run()
{
    $rules = 'Answer "yes" if number is even otherwise answer "no"';

    $getCorrectAnswer = function (int $minNumber = 1, int $maxNumber = 100) {
        $question = rand($minNumber, $maxNumber);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine($rules, $getCorrectAnswer);
}
