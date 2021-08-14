<?php
// Player
// - name
// - score
// - dock (rock, paper, scissors)
class Player
{
    public $name;
    public $score = 0;
    public $dock;
    public function __construct($name = "") {
        $this->name = $name;
    }
    public function __toString() {
        return "Player $this->name (score: $this->score)";
    }
    public function getDock() {
        // $this->dock = "paper";
        $r = rand(0, 2);
        if ($r === 0) $this->dock = "rock";
        if ($r === 1) $this->dock = "paper";
        if ($r === 2) $this->dock = "scissors";
    }
}
