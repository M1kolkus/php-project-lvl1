<?php

namespace Src\Calc;

use function cli\line;
use function cli\prompt;

function calc()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $typeOperation = ['*', '-', '+'];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber1 = rand(0, 100);
        $randomNumber2 = rand(0, 100);
        $indexOperation = rand(0, 2);
        $operation = $typeOperation[$indexOperation];
        line("Question: {$randomNumber1}{$operation}{$randomNumber2}");
        $answer = prompt('Your answer');
        if ($operation === '*') {
            $result = $randomNumber1 * $randomNumber2;
            if ($answer == $result) {
                line('Correct!');
            } else {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
                line("Let's try again, {$name}!");
                return false;
            }
        }
        if ($operation === '-') {
            $result = $randomNumber1 - $randomNumber2;
            if ($answer == $result) {
                line('Correct!');
            } else {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
                line("Let's try again, {$name}!");
                return false;
            }
        }
        if ($operation === '+') {
            $result = $randomNumber1 + $randomNumber2;
            if ($answer == $result) {
                line('Correct!');
            } else {
                line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
                line("Let's try again, {$name}!");
                return false;
            }
        }
    }
    line("Congratulations, {$name}");
}