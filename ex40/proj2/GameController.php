<?php

/*
GameController
- player1
- player2
- round
-- startRound
*/

class GameController
{
    public Player $player1;
    public Player $player2;
    public $round = 0;
    public function __toString(){
        return <<<EOT
----------
Round $this->round
$this->player1
$this->player2
----------

EOT;
    }

    public function startRound() {
        ++$this->round;
        $this->player1->getDock();
        $this->player2->getDock();
        $winner = null;
        if ($this->player1->dock === "rock" && $this->player2->dock === "scissors") {
            ++$this->player1->score;
            $winner = $this->player1->name;
        }
        if ($this->player1->dock === "rock" && $this->player2->dock === "paper") {
            ++$this->player2->score;
            $winner = $this->player2->name;
        }
        if ($this->player1->dock === "paper" && $this->player2->dock === "rock") {
            ++$this->player1->score;
            $winner = $this->player1->name;
        }
        if ($this->player1->dock === "paper" && $this->player2->dock === "scissors") {
            ++$this->player2->score;
            $winner = $this->player2->name;
        }
        if ($this->player1->dock === "scissors" && $this->player2->dock === "paper") {
            ++$this->player1->score;
            $winner = $this->player1->name;
        }
        if ($this->player1->dock === "scissors" && $this->player2->dock === "rock") {
            ++$this->player2->score;
            $winner = $this->player2->name;
        }
        $winner ??= "(tied)";
        print_r(<<<EOT
in Round $this->round
Player {$this->player1->name} gives {$this->player1->dock}
Player {$this->player2->name} gives {$this->player2->dock}
Winner: $winner


EOT);
    }

    public function getGameResult() {
        $winner = null;
        if ($this->player1->score === $this->player2->score) {
            $winner = "(tied)";
        } else {
            $winner = ($this->player1->score > $this->player2->score) ? $this->player1->name : $this->player2->name;
        }
        print_r(<<<EOT
####
in $this->round Rounds
$this->player1
$this->player2
Winner: $winner
####

EOT);
    }

}
