<?php

namespace Src\Games\Prime;

function task(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function gameStep($name): array
{
    $randomNumber = rand(0, 100);
    $return = [];
    $return['question'] = "Question: {$randomNumber}";
    $numberDivisors = [];
    for ($j = 2; $j < $randomNumber; $j++) {
        if ($randomNumber % $j == 0) {
            $numberDivisors[] = $j;
        }
    }
    if (count($numberDivisors) === 0 && $randomNumber !== 1) {
        $return['rightAnswer'] = 'yes';
    } else {
        $return['rightAnswer'] = 'no';
    }
    return $return;
}
