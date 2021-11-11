<?php

namespace Src\GeneralLogic;

use function cli\line;
use function cli\prompt;

function printWelcome($task)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);
    return $name;
}

function question($question)
{
    line($question);
    return prompt('Your answer');
}

function rightAnswer()
{
    line('Correct!');
}

function wrongAnswer($answer, $result, $name)
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.");
    line("Let's try again, {$name}!");
}

function end($name)
{
    line("Congratulations, {$name}!");
}
