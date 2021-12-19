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
    $questionPlayer = "Question: {$randomNumber1} {$randomNumber2}";
    $rightAnswer = max(array_intersect(findingDivisors($randomNumber1), findingDivisors($randomNumber2)));
    return [$questionPlayer, $rightAnswer];
}

Function findingDivisors(int $number): array
{
    $divisorsOneNumber = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $divisorsOneNumber[] = $i;
        }
    }
    return $divisorsOneNumber;
}
