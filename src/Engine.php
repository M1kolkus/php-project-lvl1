<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

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

function run($game)
{
    $str = "\\BrainGames\\Games\\{$game}\\getTask";
    $task = $str();
    $gameStep = "\\BrainGames\\Games\\{$game}\\getGameStep";
    $name = printWelcome($task);
    $numberRoundsGame = 3;

    for ($i = 0; $i < $numberRoundsGame; $i++) {
        [$questionPlayer, $rightAnswer] = $gameStep();;
        $question = $questionPlayer;
        $answer = question($question);
        if ((string)$rightAnswer === $answer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            break;
        }
    }
    line("Congratulations, {$name}!");
}
