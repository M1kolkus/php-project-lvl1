<?php

namespace Src\Core;

use function Src\GeneralLogic\end;
use function Src\GeneralLogic\printWelcome;
use function Src\GeneralLogic\question;
use function Src\GeneralLogic\rightAnswer;
use function Src\GeneralLogic\wrongAnswer;

function run($game)
{
    $str = "\\Src\\Games\\{$game}\\task";
    $task = $str();
    $gameStep = "\\Src\\Games\\{$game}\\gameStep";
    $name = printWelcome($task);

    for ($i = 0; $i < 3; $i++) {
        $data = $gameStep($name);
        $question = $data['question'];
        $answer = question($question);
        if ($data['rightAnswer'] == $answer) {
            rightAnswer();
        } else {
            wrongAnswer($answer, $data['rightAnswer'], $name);
            break;
        }
    }
    end($name);
}
