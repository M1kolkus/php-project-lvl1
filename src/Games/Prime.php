<?php

namespace BrainGames\Games\Prime;

function getTask(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function getGameStep(): array
{
    $randomNumber = random_int(0, 100);
    $questionPlayer = "Question: {$randomNumber}";
    $numberDivisors = [];
    for ($j = 2; $j < $randomNumber; $j++) {
        if ($randomNumber % $j === 0) {
            $numberDivisors[] = $j;
        }
    }
    $rightAnswer = count($numberDivisors) === 0 && $randomNumber !== 1 ? 'yes' : 'no';
    return [$questionPlayer, $rightAnswer];
}

