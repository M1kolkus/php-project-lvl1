<?php

namespace Src\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(0, 100);
        line("Question: {$randomNumber}");
        $answer = prompt('Your answer');
        if ($randomNumber % 2 == 0 && $answer === 'yes') {
            line('Correct!');
        } elseif ($randomNumber % 2 != 0 && $answer === 'no') {
            line('Correct!');
        } else {
            if ($randomNumber % 2 == 0) {
                $rightAnswer = 'yes';
            } elseif ($randomNumber % 2 != 0) {
                $rightAnswer = 'no';
            }
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }
    line("Congratulations, {$name}");
}