<?php

$phone = $_POST["phone"]; //Присвоил переменной $phone значение из формы
$name = $_POST["name"]; //Присвоил переменной $name значение из формы
$name_lenght = strlen($name); //Измерил длинну переменной $name
$phone_lenght = strlen($phone); //Измерил длинну переменной $phone

//***УЧЕСТЬ про функцию strlen: русские буквы в юникоде занимают 2 байта, в результате чего длина одной буквы становится равной двум

//Если длина короче 3 русских символов, то выводим сообщение об ошибке
if ($name_lenght < 6){
  echo "<div>Ошибка! Имя слишком короткое!<br></div>";
}
//Если длина номера короче 10 цифр, то выводим сообщение об ошибке
if ($phone_lenght < 10){
  echo "<div>Ошибка! Номер телефона слишком короткий!<br></div>";
}
//Если длина номера длиннее 9 цифр, а длина имени более 2 русских символов
if ($phone_lenght > 9 and $name_lenght > 5){
  echo "<div>Всё супер!<br></div>";
}

//РАБОТА С БД::
require_once 'connect.php';

mysqli_query($connect, "INSERT INTO `kvazardb`.`message` (`message_id`, `client_name`, `client_phone`, `message_date`) VALUES (NULL, '$name', '$phone', (''))")

?>
