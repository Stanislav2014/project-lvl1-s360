<?php

namespace Braingames\Cli;

use function \cli\line;
use function \cli\prompt;

const COUNT = 3;

function run($description, $generateData)
{
    line('Welcome to the Brain Game!');
    line($description);
    $name = prompt('May I have your name?');

    for ($i = 1; $i <= COUNT; $i++) {
        [$question, $rightAnswer] = $generateData();
        line("Question: {$question}");
        $rightAnswer = prompt('Your answer');

        if ($rightAnswer !== $userAnswer) {
            line("{$userAnswer} is wrong answer ;(.Correct answer was {$rightAnswer}.");
            line("Let's try again, $name!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}
