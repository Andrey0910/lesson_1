<?php
$str = "Привет мир";
echo $str;
echo "<br>";

$arr = explode(" ", $str);
var_dump($arr);
echo "<br>";

$length = count($arr) - 1;
$strReverse = "";
while ($length >= 0) {
    $strReverse .= $arr[$length];
    $strReverse .= ($length != 0) ? "|" : "";
    $length--;
}
echo $str_reverse;