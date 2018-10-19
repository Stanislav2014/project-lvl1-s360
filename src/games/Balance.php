<?php

namespace Braingames\Balance;

use function \Braingames\Cli\run;

const GAMELINE = 'Balance the given number.';

function balance($number)
{
    $numberArr = str_split($number);
    do {
        $minNumberKey = array_search(min($numberArr), $numberArr);
        $maxNumberKey = array_search(max($numberArr), $numberArr);
        $numDiff = $numberArr[$maxNumberKey]- $numberArr[$minNumberKey];
        if ($numDiff > 1) {
            $numberArr[$minNumberKey]+= 1;
            $numberArr[$maxNumberKey]-= 1;
        }
    } while ($numDiff > 1);

    sort($numberArr);
    
    return implode('', $numberArr);
}

function runBalance()
{
    $create = function () {
        $question = rand(10, 1000);
        $rightAnswer = balance($question);
        return [$question, $rightAnswer];
    };

    run(GAMELINE, $create);
}
