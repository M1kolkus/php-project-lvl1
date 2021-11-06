<?php

namespace Src\Prime;

use function cli\line;
use function cli\prompt;

function prime()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(0, 100);
        line("Question: {$randomNumber}");
        $answer = prompt('Your answer');
        $numberDivisors = [];
        for ($j = 2; $j < $randomNumber; $j++) {
            if ($randomNumber % $j == 0) {
                $numberDivisors[] = $j;
            }
        }
        if (count($numberDivisors) == 0) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        if ($rightAnswer == 'yes' && $answer == 'yes' || $rightAnswer == 'no' && $answer === 'no') {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }
    line("Congratulations, {$name}");
}