<?php

namespace BrainGames\Games\Calc;

function getTask(): string
{
    return 'What is the result of the expression?';
}

function choosingRandomOperator(): string
{
    $typeOperation = ['*', '-', '+'];
    $indexOperation = random_int(0, 2);
    return $typeOperation[$indexOperation];
}

function outputsSolutionExpression($number1, $number2, $operation): int
{
    switch ($operation) {
        case '*':
            return $number1 * $number2;
        case '-':
            return $number1 - $number2;
        case '+':
            return $number1 + $number2;
    }
}

function getGameStep($name): array
{
    $operation = choosingRandomOperator();
    $randomNumber1 = random_int(0, 100);
    $randomNumber2 = random_int(0, 100);
    $return = [];
    $return['question'] = "Question: {$randomNumber1} {$operation} {$randomNumber2}";
    $return['rightAnswer'] = outputsSolutionExpression($randomNumber1, $randomNumber2, $operation);
    return $return;
}
