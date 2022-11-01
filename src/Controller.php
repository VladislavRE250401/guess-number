<?php

namespace vladislav_re250401\guess_number\Controller;

use function vladislav_re250401\guess_number\GameModel\setting;
use function vladislav_re250401\guess_number\View\MenuGame;
use function vladislav_re250401\guess_number\DataBase\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
