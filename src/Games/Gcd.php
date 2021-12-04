<?php

namespace BrainGames\Games\Gcd;

function getTask(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function getGameStep($name): array
{
    $randomNumber1 = rand(1, 100);
    $randomNumber2 = rand(1, 100);
    $divisorsOneNumber = [];
    $divisorsTwoNumber = [];
    $return = [];
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
    $return['question'] = "Question: {$randomNumber1} {$randomNumber2}";
    $return['rightAnswer'] = max(array_intersect($divisorsOneNumber, $divisorsTwoNumber));
    return $return;
}
