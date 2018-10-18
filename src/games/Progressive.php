<?php

namespace Braingames\Progressive;

use function \Braingames\Cli\run;

const GAMELINE = 'What number is missing in this progression?';

function createProgressive($first, $step, $length)
{
    $arrProgressive = [$first];

    for ($i = 1; $i < $length; $i++) {
        $arrProgressive[] = $arrProgressive[$i - 1] + $step;
    }

    return($arrProgressive);
}

function runFindInProgressive()
{
    $create = function () {

        $first = rand(1, 10);
        $step = rand(1, 3);
        $length = 10;

        $arr = createProgressive($first, $step, 10);

        $key = rand($first, $length - 1);

        $arrWithQuestion = $arr;
        $arrWithQuestion[$key] = "..";

        $question = implode(' ', $arrWithQuestion);

        $rightAnswer = $arr[$key];

        return [$question, (string)$rightAnswer];
    };

    run(GAMELINE, $create);
}
