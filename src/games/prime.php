<?php

namespace ConsoleGames\Games\Prime;

use function ConsoleGames\Flow\buildEngine;
use function ConsoleGames\Utils\isPrime;

const RULES = 'Answer "yes" if number prime otherwise answer "no"';

function getCorrectAnswer(int $question)
{
    return isPrime($question) ? 'yes' : 'no';
}

function run()
{
    $getQA = function (int $maxNumber = 100) {
        $question = rand(1, $maxNumber);
        $correctAnswer = getCorrectAnswer($question);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine(RULES, $getQA);
}
