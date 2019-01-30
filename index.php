<?php
include_once "autoload.php";

// 1. Принимает ссылку как строку куда он пойдет парсить обязательно
// 2. Скачивает страницу с данными
// 3. Разбор данных
// 4. Сохрарение


// 8. Шаг - присвоили ссылку
$parser = new Parser('https://loskutskazka.ru/tkani-dlya-pechvorka/');
// 9. Вызвали функцию скачивания
$parser->downloadHtml();
// 14. Вызовем фукцию парсинга
$parser->parseHtml();