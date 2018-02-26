<?php
$count_drawings = 80; //На школьной выставке 80 рисунков.
$count_drawn_felt_pen = 23; //Нарисовано фломастерами
$count_drawn_pen = 40; //Нарисовано карандашами
$count_drawn_paints = null; //Нарисовано красками

echo "Дана задача: На школьной выставке " .$count_drawings. " рисунков. ".$count_drawn_felt_pen." из них выполнены
фломастерами, ".$count_drawn_pen." карандашами, а остальные — красками.";
echo "<br>";
echo "Найти: Сколько рисунков,
выполненные красками, на школьной выставке?";
echo "<br>";

$count_drawn_paints = $count_drawings - $count_drawn_felt_pen - $count_drawn_pen;

echo "Ответ: Краскими нарисовано - ".$count_drawn_paints." рисунков.";