<?php

namespace Src\Games\Progression;

use function Src\GeneralLogic\question;
use function Src\GeneralLogic\wrongAnswer;

function task(): string
{
    return 'What number is missing in the progression?';
}

function gameStep($name)
{
    $firstNumber = rand(0, 100);
    $progressionLength = rand(5, 10);
    $intervalProgression = rand(0, 10);
    $emptyValue = rand(1, $progressionLength);
    $setProgression = [];
    $result = '';
    for ($j = 0; $j <= $progressionLength; $j++) {
        $setProgression[] = $firstNumber;
        $firstNumber = $firstNumber + $intervalProgression;
    }
    $rightAnswer = $setProgression[$emptyValue];
    $setProgression[$emptyValue] = '..';
    for ($k = 0; $k < count($setProgression); $k++) {
        $result = "$result $setProgression[$k]";
    }
    $question = "Question:{$result}";
    $answer = question($question);
    if ($rightAnswer == $answer) {
       return true;
    } else {
        return wrongAnswer($answer, (string)$rightAnswer, $name);

    }
}
