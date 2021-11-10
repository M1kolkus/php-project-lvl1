<?php

namespace Src\GeneralLogic;

use function cli\line;
use function cli\prompt;

function beginning($task)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);
}
