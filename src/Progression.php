<?php

namespace Src\Progression;

use function cli\line;
use function cli\prompt;

function progression()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('What number is missing in the progression?');
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = rand(0, 100);
        $progressionLength = rand(5, 10);
        $intervalProgression = rand(0, 10);
        $emptyValue = rand(1, $progressionLength);
        $setProgression = [];
        $result = '';
        for ($j = 0; $j <= $progressionLength; $j++) {
            $setProgression[] = $firstNumber;
            $firstNumber = $firstNumber + $intervalProgression;
        }
        $rightAnswer = $setProgression[$emptyValue];
        $setProgression[$emptyValue] = '..';
        for ($k = 0; $k < count($setProgression); $k++) {
            $result = "$result $setProgression[$k]";
        }
        line("Question: {$result}");
        $answer = prompt('Your answer');
        if ($rightAnswer == $answer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return false;
        }
    }
    line("Congratulations, {$name}");
}