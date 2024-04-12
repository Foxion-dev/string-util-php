<?php

namespace Foxdev\Utils;

class StringUtil
{
    /**
     * @var string Хранит строку для манипуляции
     */
    private string $string;

    /**
     * Конструктор класса.
     *
     * @param string $string Инициализирующая строка.
     */
    public function __construct(string $string) {
        $this->string = $string;
    }

    /**
     * Возвращает текущую строку.
     *
     * @return string Текущая строка.
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * Разделяет строку по заданному разделителю.
     *
     * @param string $delimiter Разделитель (по умолчанию пробел).
     * @return array Массив строк, полученных разделением.
     */
    public function split(string $delimiter = ' '): array
    {
        return explode($delimiter, $this->string);
    }

    /**
     * Разделяет строку, используя регулярное выражение.
     *
     * @param string $pattern Регулярное выражение для разделения.
     * @return array Массив строк, полученных разделением.
     */
    public function splitByPattern(string $pattern): array
    {
        return preg_split($pattern, $this->string);
    }

    /**
     * Удаляет все вхождения заданного слова из строки.
     *
     * @param string $word Слово для удаления.
     * @return string Строка после удаления слов.
     */
    public function removeWords(string $word): string
    {
        return preg_replace("/\b" . preg_quote($word, '/') . "\b/", '', $this->string);
    }

    /**
     * Удаляет все пробелы из строки.
     *
     * @return string Строка без пробелов.
     */
    public function removeSpaces(): string
    {
        return str_replace(' ', '', $this->string);
    }

    /**
     * Возвращает длину строки.
     *
     * @return int Длина строки.
     */
    public function strlen(): int
    {
        return strlen($this->string);
    }

    /**
     * Возвращает строку в обратном порядке.
     *
     * @return string Перевернутая строка.
     */
    public function reverse(): string
    {
        return strrev($this->string);
    }

    /**
     * Удаляет пробелы с начала и конца строки.
     *
     * @return string Обрезанная строка.
     */
    public function trim(): string
    {
        return trim($this->string);
    }

    /**
     * Преобразует все символы строки в верхний регистр.
     *
     * @return string Строка в верхнем регистре.
     */
    public function toUpperCase(): string
    {
        return strtoupper($this->string);
    }

    /**
     * Преобразует все символы строки в нижний регистр.
     *
     * @return string Строка в нижнем регистре.
     */
    public function toLowerCase(): string
    {
        return strtolower($this->string);
    }
}
