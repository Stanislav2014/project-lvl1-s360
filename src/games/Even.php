<?php

namespace Braingames\Even;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    $count = 3;
    for ($i = 1; $i <= $count; $i++) {
        $randnumber = rand(0, 100);

        line("question:{$randnumber}");

        $answer = prompt('Your answer');
        $yes = 'yes';
        $no = 'no';

        if ($answer !== $yes && $answer !== $no) {
            line("{$answer} is wrong answer ;(.");
            return line("Let's try again, $name!");
        }
        $revertanswer = $answer === $yes ? $no : $yes;

        $iseven = $randnumber % 2 === 0 ? true : false;

        if (($answer === 'yes' && !$iseven) || ($answer === 'no' && $iseven)) {
            line("{$answer} is wrong answer ;(. Correct answer was {$revertanswer}.");
            return line("Let's try again, $name!");
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}
