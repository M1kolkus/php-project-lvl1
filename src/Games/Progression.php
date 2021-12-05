<?php

namespace BrainGames\Games\Progression;

function getTask(): string
{
    return 'What number is missing in the progression?';
}

function getGameStep(): array
{
    $firstNumber = random_int(0, 100);
    $progressionLength = random_int(5, 10);
    $intervalProgression = random_int(0, 10);
    $emptyValue = random_int(1, $progressionLength);
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
    $questionPlayer = "Question:{$result}";
    return [$questionPlayer, $rightAnswer];
}
