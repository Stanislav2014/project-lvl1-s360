<?php

namespace Braingames\Even;

use function \Braingames\Cli\run;

const GAMELINE = 'Answer "yes" if number even otherwise answer "no".';

function runEven()
{
        $create = function () {
            $question = rand(0, 100);

            $answer = $question % 2 === 0 ? 'yes' : 'no';
            return [$question,$answer];
        };

    run(GAMELINE, $create);
}
