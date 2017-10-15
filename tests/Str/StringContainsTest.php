<?php

use YeTii\General\Str;

/**
 * Class StringContainsTest
 */
class StringContainsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    public $testString = 'The quick brown fox jumps over the lazy dog, Snowball';

    /**
     * Test whether it matches using the correct case
     */
    public function testContainsLowerCase()
    {
        $str = new Str($this->testString);
        $this->assertTrue($str->contains('fox'));
    }

    /**
     * Test whether it doesn't match using the incorrect case
     */
    public function testContainsUpperCaseWithoutIgnore()
    {
        $str = new Str($this->testString);
        $this->assertFalse($str->contains('FOX'));
    }

    /**
     * Test whether it detects using the incorrect case with case-insensitive
     */
    public function testContainsUpperCaseWithIgnore()
    {
        $str = new Str($this->testString);
        $this->assertTrue($str->contains('FOX', true));
    }
}