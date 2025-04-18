<?php

echo "Hello" . "\n";
echo 'Hello' . "\n";


// ОТЛИЧИЕ МЕЖДУ ОДИНАРНЫМИ '' И ДВОЙНЫМИ КАВЫЧКАМИ ""
$x = "John";
echo "Hello $x"  . "\n";

$x = "John";
echo 'Hello $x'  . "\n";

// ДЛИНА СТРОКИ
echo strlen("Hello world!") . "\n";

// КОЛИЧЕСТВО СЛОВ В СТРОКЕ
echo str_word_count("Hello world!") . "\n";

// ПОИСК ОПРЕДЕЛЕННОЕ ТЕКСТА ВНУТРИ СТРОКИ
echo strpos("Hello world!", "world") . "\n";