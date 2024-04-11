<?php

namespace Foxdev\Tests;

use Foxdev\Utils\StringUtil;
use PHPUnit\Framework\TestCase;

class StringUtilTest extends TestCase
{
    public function testStrlen()
    {
        $this->assertEquals(4, StringUtil::strlen('test'));
        $this->assertEquals(0, StringUtil::strlen(''));
        $this->assertEquals(12, StringUtil::strlen('testing test'));
    }

    public function testCopy()
    {
        $this->assertEquals('testtesttest', StringUtil::copy('test', 3));
        $this->assertEquals('', StringUtil::copy('test', 0));
        $this->assertEquals('', StringUtil::copy('', 5));
    }

    public function testStrpos()
    {
        $this->assertEquals(1, StringUtil::strpos('test', 'e'));
        $this->assertFalse(StringUtil::strpos('test', 'a'));
        $this->assertEquals(0, StringUtil::strpos('test', 't'));
        $this->assertFalse(StringUtil::strpos('test', ''));
        $this->assertFalse(StringUtil::strpos('', 't'));
    }

    public function testStartsWith()
    {
        $this->assertTrue(StringUtil::startsWith('test', 'te'));
        $this->assertFalse(StringUtil::startsWith('test', 'st'));
        $this->assertTrue(StringUtil::startsWith('test', ''));  // Любая строка начинается с пустой подстроки
        $this->assertFalse(StringUtil::startsWith('', 'te'));   // Пустая строка не должна начинаться с непустой подстроки
    }

    public function testEndsWith()
    {
        $this->assertTrue(StringUtil::endsWith('test', 'st'));
        $this->assertFalse(StringUtil::endsWith('test', 'te'));
        $this->assertTrue(StringUtil::endsWith('test', ''));  // Любая строка заканчивается пустой подстрокой
        $this->assertFalse(StringUtil::endsWith('', 'te'));   // Пустая строка не должна заканчиваться непустой подстрокой
    }

    public function testReverse()
    {
        $this->assertEquals('tset', StringUtil::reverse('test'));
        $this->assertEquals('', StringUtil::reverse(''));
        $this->assertEquals('tset gnitset', StringUtil::reverse('testing test'));
    }

    public function testTrim()
    {
        $this->assertEquals('test', StringUtil::trim(' test '));
        $this->assertEquals('test', StringUtil::trim('test'));
        $this->assertEquals('test string', StringUtil::trim('  test string '));
        $this->assertEquals('', StringUtil::trim(''));
    }

    public function testToUpperCase()
    {
        $this->assertEquals('TEST', StringUtil::toUpperCase('test'));
        $this->assertEquals('TEST STRING', StringUtil::toUpperCase('tEsT sTrInG'));
        $this->assertEquals('', StringUtil::toUpperCase(''));
        $this->assertEquals('123', StringUtil::toUpperCase('123'));
    }

    public function testToLowerCase()
    {
        $this->assertEquals('test', StringUtil::toLowerCase('TEST'));
        $this->assertEquals('test string', StringUtil::toLowerCase('TeSt StRiNg'));
        $this->assertEquals('', StringUtil::toLowerCase(''));
        $this->assertEquals('123', StringUtil::toLowerCase('123'));
    }

    public function testSubstrCount()
    {
        $this->assertEquals(2, StringUtil::substrCount('testtest', 'test'));
        $this->assertEquals(0, StringUtil::substrCount('test', 'a'));
        $this->assertEquals(2, StringUtil::substrCount('test', 't'));
        $this->assertEquals(0, StringUtil::substrCount('test', ''));
        $this->assertEquals(0, StringUtil::substrCount('', 'test'));
    }

    public function testReplace()
    {
        $this->assertEquals('Hello World', StringUtil::replace('Hello Test', 'Test', 'World'));
        $this->assertEquals('test', StringUtil::replace('test', 'x', 'y')); // Замена несуществующей подстроки
        $this->assertEquals('', StringUtil::replace('', 'x', 'y'));         // Пустая строка для замены
    }

    public function testRandom()
    {
        $randomString = StringUtil::random(10);
        $this->assertEquals(10, strlen($randomString));
        $this->assertNotEquals($randomString, StringUtil::random(10)); // Проверка на уникальность
    }

    public function testFormat()
    {
        $this->assertEquals('Hello, Test 123!', StringUtil::format('Hello, %s %d!', 'Test', 123));
        $this->assertEquals('100%', StringUtil::format('%d%%', 100)); // Экранирование процентов
    }
}