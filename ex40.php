<?php

class Song
{
    private $lyrics;
    public function __construct($lyrics) {
        $this->lyrics = $lyrics;
    }
    public function sing_me_a_song() {
        $r = "";
        foreach ($this->lyrics as $line) {
            $r .= $line . "\n";
        }
        print_r($r);
    }
    // 参考 https://www.php.net/manual/zh/language.oop5.cloning.php
}

$happy_bday = new Song(["Happy birthday to you",
                        "I don't want to get sued",
                        "So I'll stop right there"]);

$bulls_on_parade = new Song(["They rally around tha family",
                             "With pockets full of shells"]);

$happy_bday->sing_me_a_song();
$bulls_on_parade->sing_me_a_song();
