<?php

namespace BrainGames\Games\Gcd;

function getTask(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function getGameStep(): array
{
    $randomNumber1 = random_int(1, 100);
    $randomNumber2 = random_int(1, 100);
    $divisorsOneNumber = [];
    $divisorsTwoNumber = [];
    for ($j = 1; $j <= $randomNumber1; $j++) {
        if ($randomNumber1 % $j === 0) {
            $divisorsOneNumber[] = $j;
        }
    }
    for ($k = 1; $k <= $randomNumber2; $k++) {
        if ($randomNumber2 % $k === 0) {
            $divisorsTwoNumber[] = $k;
        }
    }
    $questionPlayer = "Question: {$randomNumber1} {$randomNumber2}";
    $rightAnswer = max(array_intersect($divisorsOneNumber, $divisorsTwoNumber));
    return [$questionPlayer, $rightAnswer];
}
