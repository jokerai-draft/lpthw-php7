<?php

function anotherFileTest1() {
    print_r("\n");
    print_r("=== (" . __FILE__ . ") ===");
    print_r(Math::getState());
    print_r('=====');
    print_r("\n\n");
}

function anotherFileQuietlyDone() {
    Math::updateState();
}
