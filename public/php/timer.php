<?php
$datetime1 = new DateTime(date("Ymd")); //Получаем текущую дату
$datetime2 = new DateTime('20230202'); //Дата голосования


$datetime3 = new DateTime(date("H:i:s"));//Получаем текущее время
$datetime4 = new DateTime('21:25:00');//Время, до начала голосования

$interval1 = $datetime1->diff($datetime2);// Считаем разницу для года, месяца и дня
$interval2 = $datetime3->diff($datetime4); // И считаем разницу для времени
// Здесь должна быть проверка, не отрицательный ли интервал, но это можно сделать через 10 месяцев, поэтому отложим пока

echo $interval1->format('До начала голосования осталось: <br>' ); // отправляем результаты обратно
echo $interval2->format(' %h : %i : %s ');
?>
