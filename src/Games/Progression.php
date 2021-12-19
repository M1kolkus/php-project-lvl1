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
    $setProgression = setProgression($progressionLength, $firstNumber, $intervalProgression);
    $rightAnswer = $setProgression[$emptyValue];
    $setProgression[$emptyValue] = '..';
    $question = progressionMissingElement($setProgression);
    $questionPlayer = "Question:{$question}";
    return [$questionPlayer, $rightAnswer];
}

function setProgression($numb1, $numb2, $numb3): array
{
    $setProgression = [];
    for ($j = 0; $j <= $numb1; $j++) {
        $setProgression[] = $numb2;
        $numb2 = $numb2 + $numb3;
    }
    return $setProgression;
}

function progressionMissingElement($array): string
{
    $result = '';
    for ($k = 0; $k < count($array); $k++) {
        $result = "$result $array[$k]";
    }
    return $result;
}
