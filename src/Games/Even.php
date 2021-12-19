<?php

namespace BrainGames\Games\Even;

function getTask(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function getGameStep(): array
{
    $randomNumber = random_int(0, 100);
    $questionPlayer = "Question: {$randomNumber}";
    $rightAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';
    return [$questionPlayer, $rightAnswer];
}

