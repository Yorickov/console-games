<?php

namespace ConsoleGames\Games\Progression;

use function ConsoleGames\Flow\buildEngine;
use function ConsoleGames\Utils\fillArray;

const RULES = 'What number is missing in this progression?';

function getCorrectAnswer(array $array, int $index)
{
    return (string) $array[$index];
}

function run()
{
    $getQA = function (int $maxStep = 9, int $maxFirst = 9, int $progressionLength = 10) {
        $first = rand(1, $maxFirst);
        $step = rand(2, $maxStep);
        $progression = fillArray($progressionLength, $first, $step);
        $randomIndex = array_rand($progression);
        
        $cloneProgression = $progression;
        array_splice($cloneProgression, $randomIndex, 1, '...');
        
        $question = implode(', ', $cloneProgression);
        $correctAnswer = getCorrectAnswer($progression, $randomIndex);
        return ['question' => $question, 'correctAnswer' => $correctAnswer];
    };
    buildEngine(RULES, $getQA);
}
