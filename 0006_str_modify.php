<?php

// strtoupper()Функция возвращает строку в верхнем регистре:
$x = "Hello World!";
echo strtoupper($x) . "\n";

// strtolower()Функция возвращает строку в нижнем регистре:
$x = "Hello World!";
echo strtolower($x) . "\n";

// str_replace() заменяет некоторые символы в строке на другие символы.
$x = "Hello World!";
echo str_replace("World", "Dolly", $x) . "\n";


// strrev() переворачивает строку.
$x = "Hello World!";
echo strrev($x) . "\n";


// trim() Удаляет все пробелы из начала или конца:
$x = " Hello World! ";
echo trim($x) . "\n";

/*
explode() разбивает строку на массив.
Первый параметр функции explode() представляет собой «разделитель». 
«Разделитель» указывает, где нужно разделить строку.
*/
$x = "Hello World!";
$y = explode(" ", $x);
print_r($y);


// Объединение строк
$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z . "\n";


$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z . "\n";


// Нарезка струн
$x = "Hello World!";
echo substr($x, 6, 5) . "\n";

$x = "Hello World!";
echo substr($x, 6) . "\n";

$x = "Hello World!";
echo substr($x, -5, 3) . "\n";

$x = "Hi, how are you?";
echo substr($x, 5, -3) . "\n";


/* 
Экранирующий символ
\'	Одинарная кавычка	
\"	Двойная кавычка	
\$	Переменные PHP	
\n	Новая Строка	
\r	Возврат каретки	
\t	Вкладка	
\f	Подача формы	
\ооо	Восьмеричное значение	
\xhh	Шестнадцатеричное значение
*/
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;