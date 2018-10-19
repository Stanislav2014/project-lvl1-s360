<?php

namespace Braingames\Progressive;

use function \Braingames\Cli\run;

const GAMELINE = 'What number is missing in this progression?';
const LENGTH = 10;

function createProgressive($first, $step, $length)
{
    for ($i = 1; $i < LENGTH; $i++) {
        $arrProgressive[] = ($first + $step) * $i;
    }

    return($arrProgressive);
}

function runFindInProgressive()
{
    $create = function () {

        $first = rand(1, 10);
        $step = rand(1, 3);
        
        $arrProgressive = createProgressive($first, $step, LENGTH);

        $key = rand(0, LENGTH - 1);

        $arrWithQuestion = $arrProgressive;
        $arrWithQuestion[$key] = "..";

        $question = implode(' ', $arrWithQuestion);

        $rightAnswer = $arrProgressive[$key];

        return [$question, (string)$rightAnswer];
    };

    run(GAMELINE, $create);
}
