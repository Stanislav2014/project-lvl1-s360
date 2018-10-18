<?php

namespace Braingames\Even;

use function \Braingames\Cli\run;

const GAMELINE = 'Answer "yes" if number even otherwise answer "no".';

function isEven($number) {
    return $number % 2 === 0;
}

function runEven()
{
    $create = function () {

        $question = rand(0, 100);

        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    run(GAMELINE, $create);
}
