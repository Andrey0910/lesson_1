<?php
const ADULTHOOD = 18;
const PENSIONER = 65;
const BABE = 1;
//Роботающие
$age = 46;
echo "Возраст - ".$age;
echo "<br>";
if($age >= ADULTHOOD && $age <= PENSIONER)
{
    echo "Вам еще работать и работать";
}
echo "<br>";

//Петсиогеры
$age = 67;
echo "Возраст - ".$age;
echo "<br>";
if($age >= ADULTHOOD && $age <= PENSIONER)
{
    echo "Вам еще работать и работать";
}
elseif ($age > PENSIONER)
{
    echo "Вам пора на пенсию";
}
echo "<br>";

//Дети
$age = 10;
echo "Возраст - ".$age;
echo "<br>";
if($age >= ADULTHOOD && $age <= PENSIONER)
{
    echo "Вам еще работать и работать";
}
elseif ($age > PENSIONER)
{
    echo "Вам пора на пенсию";
}
elseif ($age >= BABE && $age < ADULTHOOD)
{
    echo "Вам ещё рано работать";
}
echo "<br>";

//Неизвестный возраст
$age = 0;
echo "Возраст - ".$age;
echo "<br>";
if($age >= ADULTHOOD && $age <= PENSIONER)
{
    echo "Вам еще работать и работать";
}
elseif ($age > PENSIONER)
{
    echo "Вам пора на пенсию";
}
elseif ($age >= BABE && $age < ADULTHOOD)
{
    echo "Вам ещё рано работать";
}
else
{
    echo "Неизвестный возраст";
}
