<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Player.php');

class ComputerPlayer extends Player
{
    public function __construct($name = "") {
        parent::__construct($name);
        $this->name = $this->name . " (COMPUTER)";
    }
    public function getDock() {
        $r = rand(0, 2);
        if ($r === 0) $this->dock = "rock";
        if ($r === 1) $this->dock = "paper";
        if ($r === 2) $this->dock = "scissors";
        // $this->dock = "paper";
    }
}
