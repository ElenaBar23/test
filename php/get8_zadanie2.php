<?php
//Полученные данные запроса
$json=
'{
    "money" : 222,
    "contacts" : [
        "+7(888)-888-88-88",
        "tast@test.xx",
        "Sergey"
    ]
}';
//Декодируем данные запроса 
$a= json_decode($json, true);

//Увеличиваем значение money в 38 раз
$money = $a['money'] * 38; 

//Создаем массивы (с телефонными номерами, почтой и именами)
$mobile = [];
$mail   = [];
$name   = [];
//Разбираем массив contacts на три массива
$mobile[] = $a['contacts'][0];
$mail[]   = $a['contacts'][1];
$name[]   = $a['contacts'][2];

//Вывод данных в формате json
echo "Новое значение money = ";
echo json_encode($money); 
echo json_encode($mobile), json_encode($mail),json_encode($name);