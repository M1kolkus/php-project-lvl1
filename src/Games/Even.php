<?php

namespace BrainGames\Games\Even;

function getTask(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function getGameStep($name): array
{
    $randomNumber = rand(0, 100);
    $return = [];
    $return['question'] = "Question: {$randomNumber}";
    if ($randomNumber % 2 === 0) {
        $return['rightAnswer'] = 'yes';
    } else {
        $return['rightAnswer'] = 'no';
    }
    return $return;
}
