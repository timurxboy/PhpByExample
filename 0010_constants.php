

define()                 -----------------------------------------
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING . "\n";
?>


const                 -----------------------------------------
<?php
const MYCAR = "Volvo";
echo MYCAR;
?>

const массив                 -----------------------------------------
<?php
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];


define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();
?>