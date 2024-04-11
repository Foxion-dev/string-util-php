# string-util-php

## Описание
`string-util-php` — это PHP-библиотека, предоставляющая набор утилитных функций для работы со строками. Она включает функции для подсчета длины строки, копирования строки, поиска подстроки и многие другие полезные операции. Проект доступен на Packagist и может быть легко установлен через Composer.

## Установка

### Через Composer
Вы можете установить `string-util-php` через Composer, добавив следующую команду в ваш терминал:

```bash
composer require foxdev/str-util-php
```

Использование Docker
Для работы с проектом с использованием Docker и Docker Compose, выполните следующие шаги:

Клонируйте репозиторий:

```bash
git clone https://github.com/Foxion-dev/string-util-php
```
Запустите контейнер:

```bash
docker-compose up --build
```
Использование
После установки вы можете использовать классы и методы string-util-php в вашем проекте. Например:

```php
<?php

use App\StringUtil;

echo StringUtil::strlen("test string");
```

Запуск тестов
Для запуска PHPUnit тестов в Docker, используйте следующую команду:

```bash
docker-compose up phpunit
```


