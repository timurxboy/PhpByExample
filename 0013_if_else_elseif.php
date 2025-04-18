if оператор - выполняет некоторый код, если выполняется одно условие
if...else оператор — выполняет некоторый код, если условие истинно, и другой код, если условие ложно
if...elseif...else оператор - выполняет разные коды для более чем двух условий
switch оператор - выбирает один из многих блоков кода для выполнения.


IF                 -----------------------------------------

if (condition) {
    // code to be executed if condition is true;
  }

<?php
if (5 > 3) {
    echo "Have a good day!" . "\n";
  }

$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}
?>


Оператор	  Имя	                  Результат	
==	        Равный	              Возвращает true, если значения равны	
===	        Идентичный	          Возвращает true, если значения и типы данных идентичны	
!=	        Не равны	            Возвращает true, если значения не равны	
<>	        Не равны	            Возвращает true, если значения не равны	
!==	        Не идентичные	        Возвращает true, если значения или типы данных не идентичны	
>	          Больше , чем	        Возвращает true, если первое значение больше второго	
<	          Меньше , чем	        Возвращает true, если первое значение меньше второго	
>=	        Больше или равно	    Возвращает значение true, если первое значение больше или равно второму значению	
<=	        Меньше или равно	    Возвращает значение true, если первое значение меньше или равно второму значению


<?php
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
?>


Оператор	  Имя	      Описание	
and	        И	        Верно, если выполняются оба условия	
&&	        И	        Верно, если выполняются оба условия	
or	        Или	      True , если выполняется любое из условий	
||	        Или	      True , если выполняется любое из условий	
xor	        Xor	      Истинно, если выполняется одно из условий, но не оба сразу	
!	          Нет	      Значение True, если условие не является истинным


<?php
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
?>


IF ... ELSE                  -----------------------------------------

if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
}

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>


IF ... ELSEIF ... ELSE                  -----------------------------------------

if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  // code to be executed if first condition is false and this condition is true;
} else {
  // code to be executed if all conditions are false;
}

<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>


Short Hand If                  -----------------------------------------

<?php
$a = 5;

if ($a < 10) $b = "Hello";

echo $b
?>


Short Hand If ... else                  -----------------------------------------

<?php
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;
?>


Nested If                  -----------------------------------------

<?php 
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
?>