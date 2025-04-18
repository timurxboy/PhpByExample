Используйте оператор switch для выбора одного из множества блоков кода для выполнения.

Вот как это работает:
    Выражение вычисляется один раз
    Значение выражения сравнивается со значениями для каждого случая
    Если есть совпадение, выполняется соответствующий блок кода
    breakКлючевое слово вырывается из блока переключения
    defaultБлок кода выполняется, если совпадение отсутствует

switch (expression) {
    case label1:
      //code block
      break;
    case label2:
      //code block;
      break;
    case label3:
      //code block
      break;
    default:
      //code block
  }

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
