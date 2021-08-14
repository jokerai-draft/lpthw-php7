<?php

// fast gothrough: left, taunt bear, open door, 42

function gold_room() {
    print_r("This room is full of gold. How much do you take? \n");
    $choice = readline("> ");
    if (preg_match("/\d/", $choice)) {
        $how_much = (int)$choice;
    } else {
        dead("Man, learn to type a number.");
    }

    if ($how_much < 50) {
        print_r("Nice, you're not greedy, you win! \n");
        exit(0);
    } else {
        dead("You greedy bastard!");
    }
}

function bear_room() {
    print_r(<<< EOT
There is a bear here.
The bear has a bunch of honey.
The fat bear is in front of another door.
How are you going to move the bear?
EOT);
    $bear_moved = false;
    // taunt bear, open door
    while (true) {
        $choice = readline("> ");
        if ($choice === "take honey") {
            dead("The bear looks at you then slaps your face.");
        } elseif ($choice === "taunt bear" && !$bear_moved) {
            print_r("The bear has moved from the door. \nYou can go through it now.\n");
            $bear_moved = true;
        } elseif ($choice === "taunt bear" && $bear_moved) {
            dead("The bear gets pissed off and chews your leg.");
        } elseif ($choice === "open door" && $bear_moved) {
            gold_room();
        } else {
            print_r("I got no idea what that means. \n");
        }
    }
}

function cthulhu_room() {
    print_r(<<< EOT
Here you see the great evil Cthulhu.
He, it, whatever stares at you and you go insane.
Do you flee for your life or eat your head?
EOT);
    $choice = readline("> ");

    if (preg_match("/\bflee\b/i", $choice)) {
        start();
    } elseif (preg_match("/\bhead\b/i", $choice)) {
        dead("Well that was tasty!");
    } else {
        cthulhu_room();
    }
}

function dead($why) {
    print_r($why . " Good job! \n");
    exit(0);
}

function start() {
    print_r(<<< EOT
You are in a dark room.
There is a door to your right and left.
Which one do you take?
EOT);
    $choice = readline("> ");
    if ($choice === "left") {
        bear_room();
    } elseif ($choice === "right") {
        cthulhu_room();
    } else {
        dead("You stumble around the room until you starve.");
    }
}

start();

// defensive 参考 ex15 ex16
// trim
