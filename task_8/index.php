<?php
$str = "Привет мир";
echo $str;
echo "<br>";

$arr = explode(" ", $str);
var_dump($arr);
echo "<br>";

$length = count($arr) - 1;
$str_reverse = "";
while ($length >= 0)
{
    $str_reverse .= $arr[$length];
    $str_reverse .= ($length != 0) ? "|" : "";
    $length--;
}
echo $str_reverse;