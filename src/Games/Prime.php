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
    $rightAnswer = isPrime($randomNumber) ? 'yes' : 'no';
    return [$questionPlayer, $rightAnswer];
}

function isPrime($number): bool
{
    $numberDivisors = [];
    for ($j = 2; $j < $number; $j++) {
        if ($number % $j === 0) {
            $numberDivisors[] = $j;
        }
    }
    return count($numberDivisors) === 0 && $number !== 1;
}
