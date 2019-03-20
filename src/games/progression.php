<?php

namespace ConsoleGames\Games\Progression;

use function ConsoleGames\Flow\buildEngine;
use function ConsoleGames\Utils\fillArray;

function getCorrectAnswer(array $array, int $index)
{
    return (string) $array[$index];
}

function run()
{
    $rules = 'What number is missing in this progression?';

    $getQA = function (int $maxStep = 9, int $maxFirst = 9, int $progressionLength = 10) {
        $first = rand(1, $maxFirst);
        $step = rand(2, $maxStep);
        $progression = fillArray($progressionLength, $first, $step);
        $randomIndex = array_rand($progression);
        
        $cloneProgression = array_slice($progression, 0);
        array_splice($cloneProgression, $randomIndex, 1, '...');
        
        $question = implode(', ', $cloneProgression);
        $correctAnswer = getCorrectAnswer($progression, $randomIndex);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine($rules, $getQA);
}
