<?php

namespace Braingames\Calc;

use function \Braingames\Cli\run;

const GAMELINE = 'What is the result of the expression?';
const OPERATORS = ['+','-','*'];

function runCalc()
{
    $create = function () {
        $question1 = rand(0, 100);
        $question2 = rand(0, 100);
        $randomoperator = OPERATORS[array_rand(OPERATORS)];

        $question = "question:{$question1} {$randomoperator} {$question2}";

        switch ($randomoperator) {
            case '+':
                $answer = $question1 + $question2;
                break;
            case '-':
                $answer = $question1 - $question2;
                break;
            case '*':
                $answer = $question1 * $question2;
                break;
        }
        return [$question,(string)$answer];
    };

    run(GAMELINE, $create);
}
