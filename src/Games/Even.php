<?php

namespace Src\Games\Even;

use function Src\GeneralLogic\question;
use function Src\GeneralLogic\wrongAnswer;

function task(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function gameStep($name)
{
    $randomNumber = rand(0, 100);
    $question = "Question: {$randomNumber}";
    $answer = question($question);
    if ($randomNumber % 2 == 0 && $answer == 'yes') {
        return true;
    } elseif ($randomNumber % 2 != 0 && $answer == 'no') {
        return true;
    } else {
        if ($randomNumber % 2 == 0) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        return wrongAnswer($answer, $rightAnswer, $name);
    }
}
