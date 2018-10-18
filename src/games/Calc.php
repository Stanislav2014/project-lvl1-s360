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
        $randomOperator = OPERATORS[array_rand(OPERATORS)];

        $question = "{$question1} {$randomOperator} {$question2}";

        switch ($randomoperator) {
            case '+':
                $rightAnswer = $question1 + $question2;
                break;
            case '-':
                $rightAnswer = $question1 - $question2;
                break;
            case '*':
                $rightAnswer = $question1 * $question2;
                break;
        }
        return [$question,(string)$rightAnswer];
    };

    run(GAMELINE, $create);
}
