
for loop

$size = count($arr);   // preferred
$size = sizeof($arr);


$size = count($arr);
for ($i = 0; $i < $size; ++$i) {
    //...
}
unset($i); unset($size);

https://stackoverflow.com/a/23410780



++$i   // preferred
$i++

https://stackoverflow.com/a/1756094
https://wiki.phpbb.com/Best_Practices:PHP


