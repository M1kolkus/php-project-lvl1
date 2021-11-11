<?php

namespace Src\Games\Prime;

use function Src\GeneralLogic\end;
use function Src\GeneralLogic\printWelcome;
use function Src\GeneralLogic\question;
use function Src\GeneralLogic\rightAnswer;
use function Src\GeneralLogic\wrongAnswer;

function prime(): void
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $name = printWelcome($task);
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(0, 100);
        $question = "Question: {$randomNumber}";
        $answer = question($question);
        $numberDivisors = [];
        for ($j = 2; $j < $randomNumber; $j++) {
            if ($randomNumber % $j == 0) {
                $numberDivisors[] = $j;
            }
        }
        if (count($numberDivisors) === 0 && $randomNumber !== 1) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        if ($rightAnswer == 'yes' && $answer == 'yes' || $rightAnswer == 'no' && $answer === 'no') {
            rightAnswer();
        } else {
            wrongAnswer($answer, $rightAnswer, $name);
            return;
        }
    }
    end($name);
}
