<?php

namespace ConsoleGames\Flow;

use function cli\prompt;

function buildEngine(string $rules, callable $getQA, int $questionsCount = 3)
{
    $userName = prompt("Welcome to the Brain Games!\n\n${rules}\nMay I have your name?");
    print_r("Hello, ${userName}!\n");

    $iter = function (int $count) use ($userName, $getQA, &$iter) {
        if ($count === 0) {
            print_r("Congratulations, ${userName}!\n");
            return;
        }

        ['question' => $question, 'correctAnswer' => $correctAnswer] = $getQA();
        $answer = prompt("Question: ${question}\nYour answer");
        
        if ($answer === $correctAnswer) {
            print_r("Correct!\n");
            $iter($count - 1);
        } else {
            print_r("${answer} is wrong answer :(. Correct one was ${correctAnswer}\nLet's try again!, ${userName}\n");
            return;
        }
    };

    $iter($questionsCount);
}
