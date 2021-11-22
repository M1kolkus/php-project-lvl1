<?php

namespace Src\Core;

use function Src\GeneralLogic\end;
use function Src\GeneralLogic\printWelcome;
use function Src\GeneralLogic\rightAnswer;

function run($game)
{
    $str = "\\Src\\Games\\{$game}\\task";
    $task = $str();
    $gameStep = "\\Src\\Games\\{$game}\\gameStep";
    $name = printWelcome($task);

    for ($i = 0; $i < 3; $i++) {
        $data = $gameStep($name);
        if ($data === true) {
            rightAnswer();
        } else {
            return $data;
        }
    }
    end($name);
}
