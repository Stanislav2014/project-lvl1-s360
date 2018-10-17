<?php

namespace Braingames\Cli;

use function \cli\line;
use function \cli\prompt;

const COUNT = 3;

function run($description, $generatedata)
{
    line('Welcome to the Brain Game!');
    line($description);
    $name = prompt('May I have your name?');

    for ($i = 1; $i <= COUNT; $i++) {
        [$question, $answer] = $generatedata();
        line("question:{$question}");
        $youranswer = prompt('Your answer');

        if ($answer !== $youranswer) {
            line("{$youranswer} is wrong answer ;(.Correct answer was {$answer}.");
            line("Let's try again, $name!");
            break;
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}
