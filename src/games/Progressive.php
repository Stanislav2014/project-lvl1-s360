<?php

namespace Braingames\Progressive;

use function \Braingames\Cli\run;

const GAMELINE = 'What number is missing in this progression?';
const LENGTH = 10;

function createProgressive($first, $step, $length)
{
    $arrProgressive = [$first];

    for ($i = 1; $i < LENGTH; $i++) {
        $arrProgressive[] = $arrProgressive[$i - 1] + $step;
    }

    return($arrProgressive);
}

function runFindInProgressive()
{
    $create = function () {

        $first = rand(1, 10);
        $step = rand(1, 3);
        
        $arrProgressive = createProgressive($first, $step, 10);

        $key = rand(0, LENGTH - 1);

        $arrWithQuestion = $arrProgressive;
        $arrWithQuestion[$key] = "..";

        $question = implode(' ', $arrWithQuestion);

        $rightAnswer = $arrProgressive[$key];

        return [$question, (string)$rightAnswer];
    };

    run(GAMELINE, $create);
}
