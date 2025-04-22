$_REQUEST Это суперглобальная переменная PHP, которая содержит отправленные данные формы и все данные файлов cookie.

Другими словами, $_REQUEST — это массив, содержащий данные из $_GET, $_POST, и $_COOKIE.

Вы можете получить доступ к этим данным с помощью ключевого слова $_REQUEST и названия поля формы или файла cookie:
<?php
$_REQUEST['firstname']
?>


Использование $_REQUEST для запросов $_POST
<html>
<body>

<form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>
?>


<?php
$name = $_REQUEST['fname'];
echo $name;
?>


В приведённом ниже примере мы поместили HTML-форму и PHP-код в один PHP-файл.
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>