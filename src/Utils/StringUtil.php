<?php

namespace Foxdev\Utils;

class StringUtil
{
    /**
     * Возвращает длину строки.
     *
     * @param string $str Строка для определения длины.
     * @return int Длина строки.
     */
    public static function strlen(string $str): int
    {
        return strlen($str);
    }

    /**
     * Повторяет строку заданное количество раз.
     *
     * @param string $str Строка для повторения.
     * @param int $times Количество повторений.
     * @return string Результат повторения строки.
     */
    public static function copy(string $str, int $times): string
    {
        return str_repeat($str, $times);
    }

    /**
     * Находит позицию первого вхождения подстроки в строке.
     *
     * @param string $haystack Строка для поиска.
     * @param string $needle Подстрока, которую нужно найти.
     * @return int|false Позиция первого вхождения подстроки или false.
     */
    public static function strpos(string $haystack, string $needle)
    {
        return strpos($haystack, $needle) ?: false;
    }

    /**
     * Проверяет, начинается ли строка с заданной подстроки.
     *
     * @param string $haystack Строка для проверки.
     * @param string $needle Подстрока для сравнения.
     * @return bool Возвращает true, если строка начинается с подстроки, иначе false.
     */
    public static function startsWith(string $haystack, string $needle): bool
    {
        return strncmp($haystack, $needle, strlen($needle)) === 0;
    }

    /**
     * Проверяет, заканчивается ли строка заданной подстрокой.
     *
     * @param string $haystack Строка для проверки.
     * @param string $needle Подстрока для сравнения.
     * @return bool Возвращает true, если строка заканчивается подстрокой, иначе false.
     */
    public static function endsWith(string $haystack, string $needle): bool
    {
        $length = strlen($needle);
        if ($length === 0) {
            return true;
        }

        return substr($haystack, -$length) === $needle;
    }

    /**
     * Переворачивает строку.
     *
     * @param string $str Строка для переворачивания.
     * @return string Перевернутая строка.
     */
    public static function reverse(string $str): string
    {
        return strrev($str);
    }

    /**
     * Обрезает пробелы и другие символы с начала и конца строки.
     *
     * @param string $str Строка для обработки.
     * @return string Обработанная строка.
     */
    public static function trim(string $str): string
    {
        return trim($str);
    }

    /**
     * Преобразует строку в верхний регистр.
     *
     * @param string $str Строка для преобразования.
     * @return string Строка в верхнем регистре.
     */
    public static function toUpperCase(string $str): string
    {
        return strtoupper($str);
    }

    /**
     * Преобразует строку в нижний регистр.
     *
     * @param string $str Строка для преобразования.
     * @return string Строка в нижнем регистре.
     */
    public static function toLowerCase(string $str): string
    {
        return strtolower($str);
    }

    /**
     * Подсчитывает количество вхождений подстроки в строку.
     *
     * @param string $haystack Строка для поиска.
     * @param string $needle Подстрока для подсчета.
     * @return int Количество вхождений.
     */
    public static function substrCount(string $haystack, string $needle): int
    {
        return $needle ? substr_count($haystack, $needle) : 0;
    }

    /**
     * Заменяет все вхождения подстроки на другую подстроку в строке.
     *
     * @param string $haystack Строка для замены.
     * @param string $search Подстрока для поиска.
     * @param string $replace Подстрока для замены.
     * @return string Результат замены.
     */
    public static function replace(string $haystack, string $search, string $replace): string
    {
        return str_replace($search, $replace, $haystack);
    }

    /**
     * Генерирует случайную строку заданной длины.
     *
     * @param int $length Длина генерируемой строки.
     * @return string Случайная строка.
     */
    public static function random(int $length = 10): string
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    /**
     * Форматирует строку согласно заданному шаблону.
     *
     * @param string $format Шаблон форматирования.
     * @param mixed ...$args Аргументы для форматирования.
     * @return string Отформатированная строка.
     */
    public static function format(string $format, ...$args): string
    {
        return sprintf($format, ...$args);
    }
}