<?php

$the_count = [1, 2, 3, 4, 5];
$the_count = range(1,5);
$fruits = ['apples', 'oranges', 'pears', 'apricots'];
$change = [1, 'pennies', 2, 'dimes', 3, 'quarters'];

# this first kind of for-loop goes through a list

foreach ($the_count as $number) {
    print_r("This is count $number \n");
}
unset($number);

# same as above

foreach ($fruits as $fruit) {
    print_r("A fruit of type: $fruit \n");
}
unset($fruit);

echo "\n\n";

# also we can go through mixed lists too
# notice we have to use {} since we don't know what's in it

foreach ($change as $item) {
    print_r("I got $item \n");
}
unset($item);

# we can also build lists, first start with an empty one

$elements = [];
$elements ??= [];

# then use the range function to do 0 to 5 counts

foreach (range(0,6) as $i) {
    print_r("Adding $i to the list. \n");
    $elements[] = $i;
}
unset($i);

# now we can print them out too

foreach ($elements as $ele) {
    print_r("Element was: $ele \n");
}
