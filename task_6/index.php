<?php
$bmw​с = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015"];
$toyota = ["model" => "RAV4", "speed" => 110, "doors" => 5, "year" => "2016"];
$opel = ["model" => "ASTRA", "speed" => 100, "doors" => 4, "year" => "2017"];

$cars = [["name" => "bmw​с", "value" => $bmw​с],
    ["name" => "toyota", "value" => $toyota],
    ["name" => "opel", "value" => $opel]];

foreach ($cars as $value) {
    echo "CAR " . $value["name"];
    echo "<br>";

    foreach ($value["value"] as $item) {
        echo $item . " ";
    }
    echo "<br>";
    echo "<br>";
}
