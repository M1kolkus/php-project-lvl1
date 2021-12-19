<?php

namespace BrainGames\Games\Calc;

function getTask(): string
{
    return 'What is the result of the expression?';
}

function getGameStep(): array
{
    $operation = choosingRandomOperator();
    $randomNumber1 = random_int(0, 100);
    $randomNumber2 = random_int(0, 100);
    $questionPlayer = "Question: {$randomNumber1} {$operation} {$randomNumber2}";
    $rightAnswer = outputsSolutionExpression($randomNumber1, $randomNumber2, $operation);
    return [$questionPlayer, $rightAnswer];
}

function choosingRandomOperator(): string
{
    $typeOperations = ['*', '-', '+'];
    $indexOperation = random_int(0, 2);
    return $typeOperations[$indexOperation];
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
