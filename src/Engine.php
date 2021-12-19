<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function run($game)
{
    $str = "\\BrainGames\\Games\\{$game}\\getTask";
    $task = $str();
    $gameStep = "\\BrainGames\\Games\\{$game}\\getGameStep";
    $name = printWelcome($task);
    $roundsCount = 3;

    for ($i = 0; $i < $roundsCount; $i++) {
        [$questionPlayer, $rightAnswer] = $gameStep();
        $answer = question($questionPlayer);
        if ((string)$rightAnswer !== $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}

function printWelcome(string $task): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);
    return $name;
}

function question(string $question): string
{
    line($question);
    return prompt('Your answer');
}

