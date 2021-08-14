<?php
if (!defined('__ROOT__')) { define('__ROOT__', dirname(__FILE__)); }
require_once(__ROOT__.'/Player.php');

class HumanPlayer extends Player
{
    public function getDock() {
        print_r(<<<EOT
input your choice:
1. rock
2. paper
3. scissors

EOT);
        while (true) {
            $r = readline("> ");
            $r = trim($r);
            if (preg_match("/\b[123]\b/", $r)) {
                $r = (int)$r;
                break;
            } else {
                print_r("invalid input" . "\n");
            }
        }
        if ($r === 1) $this->dock = "rock";
        if ($r === 2) $this->dock = "paper";
        if ($r === 3) $this->dock = "scissors";
    }
}
