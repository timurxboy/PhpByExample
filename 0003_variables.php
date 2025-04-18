<?php
$x = 5;
$y = "John";
?>


Переменная начинается со знака $, за которым следует имя переменной
Имя переменной должно начинаться с буквы или символа подчеркивания
Имя переменной не может начинаться с числа
Имя переменной может содержать только буквенно-цифровые символы и знаки подчёркивания (A-z, 0-9 и _).
Имена переменных чувствительны к регистру ($age и $AGE — это две разные переменные)


<?php
$txt = "W3Schools.com";
echo "I love $txt!\n";

$txt = "W3Schools.com";
echo "I love " . $txt . "!\n";


$x = 5;
$y = 4;
echo $x + $y;
?>


<?php
$x = 5;      // $x is an integer
$y = "\nJohn\n"; // $y is a string
echo $x;
echo $y;
?>


String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource


<?php
// var_dump()Функция возвращает тип данных и значение:
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);


$x = "John";
echo $x;
?>