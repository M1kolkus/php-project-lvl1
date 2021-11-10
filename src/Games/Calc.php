<?php

namespace Src\Games\Calc;

use function Src\GeneralLogic\printWelcome;
use function Src\GeneralLogic\question;
use function Src\GeneralLogic\rightAnswer;
use function Src\GeneralLogic\wrongAnswer;
use function Src\GeneralLogic\end;

function calc()
{
    $task = 'What is the result of the expression?';
    $name = printWelcome($task);
    $typeOperation = ['*', '-', '+'];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber1 = rand(0, 100);
        $randomNumber2 = rand(0, 100);
        $indexOperation = rand(0, 2);
        $operation = $typeOperation[$indexOperation];
        $question = "Question: {$randomNumber1}{$operation}{$randomNumber2}";
        $answer = question($question);
        if ($operation === '*') {
            $result = $randomNumber1 * $randomNumber2;
            if ($answer == $result) {
                rightAnswer();
            } else {
                wrongAnswer($answer, $result, $name);
                return false;
            }
        }
        if ($operation === '-') {
            $result = $randomNumber1 - $randomNumber2;
            if ($answer == $result) {
                rightAnswer();
            } else {
                wrongAnswer($answer, $result, $name);
                return false;
            }
        }
        if ($operation === '+') {
            $result = $randomNumber1 + $randomNumber2;
            if ($answer == $result) {
                rightAnswer();
            } else {
                wrongAnswer($answer, $result, $name);
                return false;
            }
        }
    }
    end($name);
}