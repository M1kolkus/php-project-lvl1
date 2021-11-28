<?php

namespace Src\Games\Calc;

function task(): string
{
    return 'What is the result of the expression?';
}

function gameStep($name): array
{
    $typeOperation = ['*', '-', '+'];
    $randomNumber1 = rand(0, 100);
    $randomNumber2 = rand(0, 100);
    $indexOperation = rand(0, 2);
    $operation = $typeOperation[$indexOperation];
    $return = [];
    $return['question'] = "Question: {$randomNumber1} {$operation} {$randomNumber2}";
    if ($operation === '*') {
        $return['rightAnswer'] = $randomNumber1 * $randomNumber2;
    }
    if ($operation === '-') {
        $return['rightAnswer'] = $randomNumber1 - $randomNumber2;
    }
    if ($operation === '+') {
        $return['rightAnswer'] = $randomNumber1 + $randomNumber2;
    }
    return $return;
}
