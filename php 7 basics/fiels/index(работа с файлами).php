<?php
//создаю сразу 10 текстовых документов, с разными именами!

$structure = './deckos'; // создаем файловую структуру

if (!mkdir($structure, 0777, true)) { // создаем саму папку
    die('Не удалось создать директории...');
}

$numf = 0;

while ($numf ++ <= 9) { // циклом можно создать сразу множество файлов

	$file = $numf . '.txt';

	if (!file_exists($file)) {
	    $fp = fopen('deckos/' . $file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
	    //так же указываем в какой директории создать файлы
	    fwrite($fp, "Значение, то что будет в файле " . $numf);
	    fclose($fp);
	}
}

echo "Было создано 10 текстовых файлов";

//Это отличный урок по работе с файловой структуре в PHP!
?>