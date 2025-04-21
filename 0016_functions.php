Объявление пользовательской функции начинается с ключевого слова function, за которым следует имя функции:

function myMessage() {
  echo "Hello world!";
}

<?php
function myMessage() {
    echo "Hello world!";
}
  
myMessage();
?>


Аргумент — это просто переменная.
<?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

<?php
function familyName1($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  familyName("Hege", "1975");
  familyName("Stale", "1978");
  familyName("Kai Jim", "1983");
?>


Если мы вызовем функцию setHeight() без аргументов, она примет значение по умолчанию в качестве аргумента:
<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);
?>


Чтобы позволить функции возвращать значение, используйте оператор return:
<?php 
function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);
?>


Когда аргумент функции передаётся по ссылке, изменения аргумента также изменяют переданную переменную. 
Чтобы преобразовать аргумент функции в ссылку, используется оператор &:

<?php
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
?>


Если перед параметром функции используется оператор ..., функция принимает неизвестное количество аргументов. 
Это также называется вариативной функцией.
<?php
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a;
?>


У вас может быть только один аргумент переменной длины, и он должен быть последним аргументом.
<?php
function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;
?>


strict      - Декларация заставляет использовать вещи по назначению.
<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>
