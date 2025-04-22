$_POST содержит массив переменных, полученных с помощью метода HTTP POST.

Существует два основных способа отправки переменных с помощью метода HTTP Post:

HTML    - формы
HTTP    - запросы JavaScript


HTML-форма отправляет информацию с помощью метода HTTP POST, 
если для атрибута method формы установлено значение "POST".
<html>
<body>

<form method="POST" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>
Когда пользователь нажимает кнопку «Отправить», 
данные формы отправляются в PHP-файл, указанный в атрибуте action тега <form>.


В файле действий мы можем использовать переменную $_POST для сбора значений из поля ввода.
<?php
$name = $_POST['fname'];
echo $name;
?>


В приведённом ниже примере мы поместили HTML-форму и PHP-код в один PHP-файл.
<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>




$_POST в HTTP-запросах JavaScript
При отправке HTTP-запроса в JavaScript вы можете указать, что HTTP-метод — POST.

function myfunction() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "demo_phpfile.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.send("fname=Mary");
  }
}

Приведенный выше код будет:
    Инициировать HTTP-запрос
    Установите для HTTP-метода значение POST
    Установите допустимый заголовок запроса
    Создайте функцию для выполнения по завершении запроса
    Отправьте HTTP-запрос с переменной, для которой fname установлено значение Mary


Посмотрите на функцию, которая будет выполнена, когда запрос будет выполнен:


xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }

Если мы также добавим JavaScript, страница будет выглядеть следующим образом:
<html>
<script>
function myfunction() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "demo_ajax.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.send("fname=Mary");
  }
}
</script>
<body>

<button onclick="myfunction()">Click me!</button>

<h1 id="demo"></h1>

</body>
</html>


В PHP-файле, который получает этот HTTP-запрос (demo_ajax.php), 
мы просто используем переменную $_POST для получения переменной fname и записываем её в качестве ответа.
<?php
$name = $_POST['fname'];
echo $name;
?>