<?php
namespace Braingames\Prime;

use function \Braingames\Cli\run;

const GAMELINE = 'Answer "yes" if given number is prime. Otherwise answer "no".';
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function runPrime()
{
    $create = function () {
        $question = rand(0, 100);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
    run(GAMELINE, $create);
}
