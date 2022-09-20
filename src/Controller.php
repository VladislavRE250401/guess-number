<?php

namespace VladislavRE250401\guess_number\Controller;
use function VladislavRE250401\guess_number\View\showGame;

function startGame()
{
   echo "Game started" .PHP_EOL;
   showGame();
}
