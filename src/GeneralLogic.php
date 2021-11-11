<?php

namespace Src\GeneralLogic;

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

function rightAnswer(): void
{
    line('Correct!');
}

function wrongAnswer(string $answer, string $result, string $name): void
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
    line("Let's try again, {$name}!");
}

function end(string $name): void
{
    line("Congratulations, {$name}!");
}
