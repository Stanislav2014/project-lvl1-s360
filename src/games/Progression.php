<?php

namespace Braingames\Progression;

use function \Braingames\Cli\run;

const GAMELINE = 'What number is missing in this progression?';
const LENGTH = 10;

function createProgression($first, $step, $length)
{
    for ($i = 1; $i < $length; $i++) {
        $arrProgression[] = ($first + $step) * $i;
    }

    return $arrProgression;
}

function runFindInProgression()
{
    $create = function () {

        $first = rand(1, 10);
        $step = rand(1, 3);
        
        $arrProgression = createProgression($first, $step, LENGTH);

        $key = rand(0, LENGTH - 1);

        $arrWithQuestion = $arrProgression;
        $arrWithQuestion[$key] = "..";

        $question = implode(' ', $arrWithQuestion);

        $rightAnswer = $arrProgression[$key];

        return [$question, (string)$rightAnswer];
    };

    run(GAMELINE, $create);
}
