<?php

namespace Src\Games\Progression;

function task(): string
{
    return 'What number is missing in the progression?';
}

function gameStep($name): array
{
    $firstNumber = rand(0, 100);
    $progressionLength = rand(5, 10);
    $intervalProgression = rand(0, 10);
    $emptyValue = rand(1, $progressionLength);
    $setProgression = [];
    $result = '';
    $return = [];
    for ($j = 0; $j <= $progressionLength; $j++) {
        $setProgression[] = $firstNumber;
        $firstNumber = $firstNumber + $intervalProgression;
    }
    $return['rightAnswer'] = $setProgression[$emptyValue];
    $setProgression[$emptyValue] = '..';
    for ($k = 0; $k < count($setProgression); $k++) {
        $result = "$result $setProgression[$k]";
    }
    $return['question'] = "Question:{$result}";
    return $return;
}
