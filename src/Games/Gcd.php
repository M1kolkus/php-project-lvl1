<?php

namespace Src\Games\Gcd;

use function Src\GeneralLogic\printWelcome;
use function Src\GeneralLogic\question;
use function Src\GeneralLogic\rightAnswer;
use function Src\GeneralLogic\wrongAnswer;
use function Src\GeneralLogic\end;

function gcd(): void
{
    $task = 'Find the greatest common divisor of given numbers.';
    $name = printWelcome($task);
    for ($i = 0; $i < 3; $i++) {
        $randomNumber1 = rand(0, 100);
        $randomNumber2 = rand(0, 100);
        $divisorsOneNumber = [];
        $divisorsTwoNumber = [];
        for ($j = 1; $j <= $randomNumber1; $j++) {
            if ($randomNumber1 % $j === 0) {
                $divisorsOneNumber[] = $j;
            }
        }
        for ($k = 1; $k <= $randomNumber2; $k++) {
            if ($randomNumber2 % $k === 0) {
                $divisorsTwoNumber[] = $k;
            }
        }
        $gcd = max(array_intersect($divisorsOneNumber, $divisorsTwoNumber));
        $question = "Question: {$randomNumber1} {$randomNumber2}";
        $answer = question($question);
        if ($gcd == $answer) {
            rightAnswer();
        } else {
            wrongAnswer($answer, (string) $gcd, $name);
            return;
        }
    }
    end($name);
}
