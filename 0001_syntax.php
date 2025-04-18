<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>



<?php
echo "Hello World!";
?>



<!-- операторы НЕ ЧУВСТВИТЕЛЕН В РЕГИСТОРУ echo и ECHO одно и тоже -->
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<!-- переменные ЧУВСТВИТЕЛЕН В РЕГИСТОРУ color и COLOR и coLOR рассматриваются как три разные переменные -->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>




</body>
</html>