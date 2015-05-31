<?php
namespace testravis;

use PHPUnit_Framework_TestCase;

class IndexTest extends PHPUnit_Framework_TestCase
{
    protected $classToTest = 'HelloWorld';
    public function setUp()
    {
    }
    public function tearDown()
    {
    }
    public function testHelloWorld()
    {
        $hello = new $this->classToTest();
        $this->assertEquals('Hello', $hello->hello());
    }
}
