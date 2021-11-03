<?php

namespace Src\Gcd;

use function cli\line;
use function cli\prompt;

function gcd()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i < 3; $i++) {
        $randomNumber1 = rand(0, 100);
        $randomNumber2 = rand(0, 100);
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
        $gcd = max(array_intersect($divisorsOneNumber, $divisorsTwoNumber));
        line("Question: {$randomNumber1} {$randomNumber2}");
        $answer = prompt('Your answer');
        if ($gcd == $answer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }
    line("Congratulations, {$name}");
}