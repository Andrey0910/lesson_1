<?php
$countDrawings = 80; //На школьной выставке 80 рисунков.
$countDrawnFeltPen = 23; //Нарисовано фломастерами
$countDrawnPen = 40; //Нарисовано карандашами
$countDrawnPaints = null; //Нарисовано красками

echo "Дана задача: На школьной выставке " . $countDrawings . " рисунков. " . $countDrawnFeltPen . " из них выполнены
фломастерами, " . $countDrawnPen . " карандашами, а остальные — красками.";
echo "<br>";
echo "Найти: Сколько рисунков,
выполненные красками, на школьной выставке?";
echo "<br>";

$countDrawnPaints = $countDrawings - $countDrawnFeltPen - $countDrawnPen;

echo "Ответ: Краскими нарисовано - " . $countDrawnPaints . " рисунков.";