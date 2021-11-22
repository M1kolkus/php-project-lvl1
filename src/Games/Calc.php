<?php

namespace Src\Games\Calc;

use function Src\GeneralLogic\question;
use function Src\GeneralLogic\wrongAnswer;

function task(): string
{
    return 'What is the result of the expression?';
}


function gameStep($name)
{
    $typeOperation = ['*', '-', '+'];
    $randomNumber1 = rand(0, 100);
    $randomNumber2 = rand(0, 100);
    $indexOperation = rand(0, 2);
    $operation = $typeOperation[$indexOperation];
    $question = "Question: {$randomNumber1} {$operation} {$randomNumber2}";
    $answer = question($question);
    if ($operation === '*') {
        $result = $randomNumber1 * $randomNumber2;
        if ($answer == $result) {
            return true;
        } else {
            return wrongAnswer($answer, (string) $result, $name);
        }
    }
    if ($operation === '-') {
        $result = $randomNumber1 - $randomNumber2;
        if ($answer == $result) {
            return true;
        } else {
            return wrongAnswer($answer, (string) $result, $name);
        }
    }
    if ($operation === '+') {
        $result = $randomNumber1 + $randomNumber2;
        if ($answer == $result) {
            return true;
        } else {
            return wrongAnswer($answer, (string) $result, $name);
            }
        }
 }
