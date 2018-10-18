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
        [$question, $answer] = $generateData();
        line("Question: {$question}");
        $yourAnswer = prompt('Your answer');

        if ($answer !== $yourAnswer) {
            line("{$yourAnswer} is wrong answer ;(.Correct answer was {$answer}.");
            line("Let's try again, $name!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}
