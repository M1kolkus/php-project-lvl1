<?php

namespace Src\Games\Even;

use function Src\GeneralLogic\printWelcome;
use function Src\GeneralLogic\question;
use function Src\GeneralLogic\rightAnswer;
use function Src\GeneralLogic\wrongAnswer;
use function Src\GeneralLogic\end;

function even(): void
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = printWelcome($task);
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(0, 100);
        $question = "Question: {$randomNumber}";
        $answer = question($question);
        if ($randomNumber % 2 == 0 && $answer == 'yes') {
            rightAnswer();
        } elseif ($randomNumber % 2 != 0 && $answer == 'no') {
            rightAnswer();
        } else {
            if ($randomNumber % 2 == 0) {
                $rightAnswer = 'yes';
            } elseif ($randomNumber % 2 != 0) {
                $rightAnswer = 'no';
            }
            wrongAnswer($answer, $rightAnswer, $name);
            return;
        }
    }
    end($name);
}
