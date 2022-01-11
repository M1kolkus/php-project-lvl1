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
    $emptyValue = random_int(1, $progressionLength-1);
    $setProgression = getProgression($progressionLength, $firstNumber, $intervalProgression);
    $rightAnswer = $setProgression[$emptyValue];
    $setProgression[$emptyValue] = '..';
    $question = getMaskedProgression($setProgression);
    $questionPlayer = "Question:{$question}";
    return [$questionPlayer, $rightAnswer];
}

function getProgression($progressionLength, $firstNumber, $intervalProgression): array
{
    $setProgression = [];
    for ($j = 0; $j < $progressionLength; $j++) {
        $setProgression[] = $firstNumber;
        $firstNumber = $firstNumber + $intervalProgression;
    }
    return $setProgression;
}

function getMaskedProgression($array): string
{
    $result = '';
    for ($k = 0; $k < count($array); $k++) {
        $result = "$result $array[$k]";
    }
    return $result;
}
