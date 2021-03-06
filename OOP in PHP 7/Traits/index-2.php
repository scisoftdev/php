<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Трейты</h3>
<p>Трейты - это инструмет для повторного использования в классах, их еще называют примеси. Используется, если нужно объединить
    общие методы для всех наследующих классов. Трейт - это механиз зповторного использования кода. Предназначен для формирования функционала
    хорошо структурированным и последовательным образом. </p>
<?php

trait Hello {
    public function sayWorld() {
        echo "World ";
    }
}

trait World { //создадим трейт
    public function sayHello() { //создадим и дополним функцию
        echo "Hello ";
    }
}

class myHelloWorld { // теперь наследование
    use Hello,World; // и наследование функции, в данном примере просто перечиляем трейы через запятую
}

$obj = new myHelloWorld(); // теперь создаем экземпляр класса
$obj->sayHello(); // и обращаемся к функции
$obj->sayWorld();

//нельзя использовать два трейта с идним и тем же именем - это приводит к ошибке
?>
</body>
</html>