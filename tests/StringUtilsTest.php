<?php

require 'src/StringUtils.php';
require("vendor/autoload.php");

use Webmozart\Assert\Assert;

Assert::eq(StringUtils\capitalize('hello'), 'Hello');
Assert::eq(StringUtils\capitalize(''), '');


/*if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}*/

echo "Все тесты пройдены!\n";
