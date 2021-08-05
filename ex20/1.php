<?php

// when file is not there
// https://www.php.net/manual/zh/language.exceptions.php

try
{
    $file = new SplFileObject("ex15_sample.txt");
    if ($file) {
        while (!$file->eof()){
            echo $file->fgets();
        }
        $file = null;
    } else {
        echo "invalid filename\n";
        // die("invalid filename\n");
    }
} catch (\Throwable $th) { // Exception $e
    // throw $th;
    // throw new Exception("Error Processing Request");
    print_r($th);
}

