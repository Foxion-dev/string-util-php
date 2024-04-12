<?php

namespace Foxdev\Tests;

use Foxdev\Utils\StringUtil;
use PHPUnit\Framework\TestCase;

class StringUtilTest extends TestCase
{
    private $string;

    protected function setUp(): void
    {
        $this->string = new StringUtil("something in english");
    }

    public function testGetString()
    {
        $this->assertEquals("something in english", $this->string->getString());
    }

    public function testSplit()
    {
        $this->assertEquals(["something", "in", "english"], $this->string->split());
    }

    public function testSplitByPattern()
    {
        $this->assertEquals(["something", "in", "english"], $this->string->splitByPattern("/\s+/"));
    }

    public function testRemoveWords()
    {
        $this->assertEquals("something  english", $this->string->removeWords("in"));
    }

    public function testRemoveSpaces()
    {
        $this->assertEquals("somethinginenglish", $this->string->removeSpaces());
    }

    public function testStrlen()
    {
        $this->assertEquals(20, $this->string->strlen());
    }

    public function testReverse()
    {
        $this->assertEquals("hsilgne ni gnihtemos", $this->string->reverse());
    }

    public function testTrim()
    {
        $string = new StringUtil("  something in english  ");
        $this->assertEquals("something in english", $string->trim());
    }

    public function testToUpperCase()
    {
        $this->assertEquals("SOMETHING IN ENGLISH", $this->string->toUpperCase());
    }

    public function testToLowerCase()
    {
        $this->assertEquals("something in english", $this->string->toLowerCase());
    }
}