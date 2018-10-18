<?php

namespace Braingames\Gcd;

use function \Braingames\Cli\run;

const GAMELINE = 'Find the greatest common divisor of given numbers.';

function gcd($a, $b)
{
    if ($a == 0 || $b == 0) {
        return abs(max(abs($a), abs($b)));
    }
    $r = $a % $b;
    return ($r != 0) ? gcd($b, $r) :abs($b);
}
    
function runGcd()
{
    $create = function () {
        $question1 = rand(0, 100);
        $question2 = rand(0, 100);
        $question = "{$question1} {$question2}";
        $rightAnswer = gcd($question1, $question2);
        return [$question,(string)$rightAnswer];
    };
    run(GAMELINE, $create);
}
