<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Player.php');
require_once(__ROOT__.'/GameController.php');

require_once(__ROOT__.'/HumanPlayer.php');
require_once(__ROOT__.'/ComputerPlayer.php');

function test1() {

    $player1 = new Player("Alice");
    $player2 = new Player("Bill");

    $gameController = new GameController();
    $gameController->player1 = $player1;
    $gameController->player2 = $player2;
    echo $gameController;

    for ($i = 0; $i < 3; ++$i) {
        $gameController->startRound();
    }

    $gameController->getGameResult();

}

function test2() {
    $player1 = new HumanPlayer("Sabrina");
    $player2 = new ComputerPlayer("DT3000");

    $gameController = new GameController();
    $gameController->player1 = $player1;
    $gameController->player2 = $player2;
    echo $gameController;

    for ($i = 0; $i < 3; ++$i) {
        $gameController->startRound();
    }

    $gameController->getGameResult();
}

test2();

// require
// https://www.huaweicloud.com/articles/b2379599e471b4b51ae47cf994e193e9.html
