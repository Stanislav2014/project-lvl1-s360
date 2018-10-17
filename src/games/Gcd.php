<?php

namespace Braingames\Gcd;

use function \cli\line;
use function \cli\prompt;

function gcd($a, $b)
{
    if ($a == 0 || $b == 0)
        return abs( max(abs($a), abs($b)) );
       
    $r = $a % $b;
    return ($r != 0) ? gcd($b, $r) :abs($b);
    }
    

function run()
{
    line('Welcome to the Brain Game!');
    line('Find the greatest common divisor of given numbers.');
    $name = prompt('May I have your name?');
    $count = 3;
    for ($i = 1; $i <= $count; $i++) {
      
        $randnumber1 = rand(0, 100);
        $randnumber2 = rand(0, 100);
        line("question:{$randnumber1} {$randnumber2}");
        $answer = prompt('Your answer');
        $result = gcd($randnumber1, $randnumber2);

        if ($answer != $result) {
            line("{$answer} is wrong answer ;(.Correct answer was {$result}.");
            return line("Let's try again, $name!");
        }
      
        line("Correct!");
    }
    line("Congratulations, $name!");
}

