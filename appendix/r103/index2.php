<?php

$age = 299;
view('view1.php', ['age' => $age, ]);

function view($page, $databag = []) {
    extract($databag);
    require_once $page;
}
