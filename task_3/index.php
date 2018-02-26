<?php
const NUM = 33;
var_dump(defined("NUM"));
echo "<br>";
if(defined("NUM"))
{
    echo "Костанта существует. Ее значение - ".NUM;
}
else
{
    echo "Константы с таким именем не существует.";
}
echo "<br>";
//NUM = 100; Выдает ошибку