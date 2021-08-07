<?php
print_r(<<<EOT
You enter a dark room with two doors.
Do you go through door #1 or door #2? \n
EOT);
$door = readline("> ");

if ($door === "1") {
    print_r(<<<EOT
There's a giant bear here eating a cheese cake.
What do you do?
1. Take the cake.
2. Scream at the bear. \n
EOT);
    $bear = readline("> ");

    if ($bear === "1") {
        print_r("The bear eats your face off. Good job! \n");
    } elseif ($bear === "2") {
        print_r("The bear eats your legs off. Good job! \n");
    } else {
        print_r("Well, doing {$bear} is probably better. \nBear runs away. \n");
    }
} elseif ($door === "2") {
    print_r(<<<EOT
You stare into the endless abyss at Cthulhu's retina.
1. Blueberries.
2. Yellow jacket clothespins.
3. Understanding revolvers yelling melodies. \n
EOT);
    $insanity = readline("> ");

    if ($insanity === "1" || $insanity === "2") {
        print_r("Your body survives powered by a mind of jello. \nGood job!!! \n");
    } else {
        print_r("The insanity rots your eyes into a pool of muck.\n Good job! \n");
    }
} else {
    print_r("You stumble around and fall on a knife and die. Good job! \n");
}
