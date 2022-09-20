<?php

namespace vladislav_re250401\guess_number\Controller;
use function vladislav_re250401\guess_number\View\showGame;

function startGame()
{
   echo "Game started" .PHP_EOL;
   showGame();
}
