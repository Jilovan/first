<?
header('Content-Type: text/html; charset=utf-8');

//----------------------------------------Задание №1
echo "-- Задание 1 --<br>";
$name = "Владимир";
$age = "37";
settype ($name, "string");
settype ($age, "string");
echo "Меня зовут: $name";
echo "<br>";
echo "Мой возраст: $age";
echo "<br>-- Конец задания 1 --";
echo "<br><hr><br>";

//----------------------------------------Задание №2
echo "-- Задание 2 --<br>";
$name2 = "Владимир";
//$age2 = "37";
echo "Меня зовут: $name2";
echo "<br>";
echo "Мой возраст: $age2 лет";
echo "<br>-- Конец задания 2 --";
echo "<br><hr><br>";

//----------------------------------------Задание №3
echo "-- Задание 3 --<br>";
//Определяем константу
define("MY_CONST",789,true);
//Проверяем существование константы
if (defined("MY_CONST") == true) echo "Yes";
echo "<br>";
//Выводим значение константы
if (defined("MY_CONST") == true) echo MY_CONST;
echo "<br>";
//Выводим изменённое значение константы (789 + 211 = 1000)
if (defined("MY_CONST") == true) echo MY_CONST + 211;
echo "<br>-- Конец задания 3 --";
echo "<br><hr><br>";

//----------------------------------------Задание №4
echo "-- Задание 4 --<br>";
//Задаём значение переменной
$age4 = 78;
/*Ищем значение переменной в определённых диапазонах и выводим сообщение,
 если значение переменной попадает в заданный диапазон*/
if ($age4 > 17 and $age4 < 65) {
    echo "Вам еще работать и работать";
} elseif ($age4 > 1 and $age4 <= 17) {
    echo "Вам ещё рано работать"; //выводим сообщение, если цифровое значение дня больше 1 и меньше 17 включая
} elseif ($age4 < 114) {
    echo "Возраст неопределён";
} elseif ($age4 > 114) {
    echo "Вы ещё живы?";
} else {
    echo "Вам пора на пенсию";
}
echo "<br>-- Конец задания 4 --";
echo "<br><hr><br>";

//----------------------------------------Задание №5
echo "-- Задание 5 --<br>";
//Задаём значение переменной, равное определённому дню в цифровом значении
$day = 8;
//Перебираем цифровые значения дней (цифровые сопоставления: пн=1, вт=2 и т.д.)
switch ($day) {
    case $day < 6:
        echo "Рабочий день<br>"; //выводим сообщение, если цифровое значение дня меньше 6
        break;
    case $day < 8:
        echo "Выходной день<br>";
        break;
    case $day > 7:
        echo "Неизвестный день<br>";
        break;
}
echo "<br>-- Конец задания 5 --";
echo "<br><hr><br>";

//----------------------------------------Задание №6
echo "-- Задание 6 --<br>";
//Задаём три массива значений для переменных (взяты марки автомобилей)
$bmw = array(
    'model' => "X5",
    'speed' => "120",
    'doors' => "5",
    'year' => "2015"
);

$toyota = array(
    'model' => "Land Cruiser",
    'speed' => "180",
    'doors' => "5",
    'year' => "2016"
);

$opel = array(
    'model' => "Astra",
    'speed' => "140",
    'doors' => "3",
    'year' => "2017"
);
//перебираем все значения массива и все значения из массива выводим по заданному условию форматирования
foreach ($bmw as $key => $value) {
    echo $key . "=" . $value . ", ";
}
echo "<br>";

foreach ($toyota as $key => $value) {
    echo $key . "=" . $value . ", ";
}
echo "<br>";

foreach ($opel as $key => $value) {
    echo $key . "=" . $value . ", ";
}
echo "<br>";

echo "<br>-- Конец задания 6 --";
echo "<br><hr><br>";

?>
