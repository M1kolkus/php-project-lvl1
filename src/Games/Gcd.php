<?php

namespace Src\Games\Gcd;


use function Src\GeneralLogic\question;
use function Src\GeneralLogic\wrongAnswer;

function task(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function gameStep($name)
{
    $randomNumber1 = rand(1, 100);
    $randomNumber2 = rand(1, 100);
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
    $result = max(array_intersect($divisorsOneNumber, $divisorsTwoNumber));
    $question = "Question: {$randomNumber1} {$randomNumber2}";
    $answer = question($question);
    if ($result == $answer) {
        return true;
    } else {
        return wrongAnswer($answer, (string) $result, $name);
    }
}
