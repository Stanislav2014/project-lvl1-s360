<?php

namespace Braingames\Calc;

use function \cli\line;
use function \cli\prompt;

function run() 
{
    line('Welcome to the Brain Game!');
    line('What is the result of the expression?');
    $name = prompt('May I have your name?');
    $count = 3; 
    for ($i = 1; $i <= $count;$i++) {

        $randnumber1 = rand(0, 100);
        $randnumber2 = rand(0, 100);
        $arr = ['+','-','*'];
        $randoperator = $arr[array_rand($arr)];

        line("question:{$randnumber1} {$randoperator} {$randnumber2}");
        if ($randoperator == '+') {
            $result = $randnumber1 + $randnumber2;
        }
        if ($randoperator == '-') {
            $result = $randnumber1 - $randnumber2;
        }
        if ($randoperator == '*') {
            $result = $randnumber1 * $randnumber2;
        }


        echo $result;
        $answer = prompt('Your answer');

        if ($answer != $result) {
            line("{$answer} is wrong answer ;(.");
            return line("Let's try again, $name!");
        }
      
        line("Correct!");

    }
    line("Congratulations, $name!");

}