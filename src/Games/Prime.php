<?php

namespace Src\Games\Prime;

use function Src\GeneralLogic\question;
use function Src\GeneralLogic\wrongAnswer;

function task(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function gameStep($name)
{
    $randomNumber = rand(0, 100);
    $question = "Question: {$randomNumber}";
    $answer = question($question);
    $numberDivisors = [];
    for ($j = 2; $j < $randomNumber; $j++) {
        if ($randomNumber % $j == 0) {
            $numberDivisors[] = $j;
        }
    }
    if (count($numberDivisors) === 0 && $randomNumber !== 1) {
        $rightAnswer = 'yes';
    } else {
        $rightAnswer = 'no';
    }
    if ($rightAnswer == 'yes' && $answer == 'yes' || $rightAnswer == 'no' && $answer === 'no') {
        return true;
    } else {
        return wrongAnswer($answer, $rightAnswer, $name);
    }
}
