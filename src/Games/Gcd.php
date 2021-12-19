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
    $rightAnswer = getMaxDivisor($randomNumber1, $randomNumber2);
    return [$questionPlayer, $rightAnswer];
}

function findingDivisors(int $number): array
{
    $divisorsOneNumber = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $divisorsOneNumber[] = $i;
        }
    }
    return $divisorsOneNumber;
}

function getMaxDivisor($number1, $number2): int
{
    return max(array_intersect(findingDivisors($number1), findingDivisors($number2)));
}
