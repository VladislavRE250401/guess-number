<?php

namespace vladislav_re250401\guess-number\Controller;

use function vladislav_re250401\guess-number\GameModel\setting;
use function vladislav_re250401\guess-number\View\MenuGame;
use function vladislav_re250401\guess-number\DataBase\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
