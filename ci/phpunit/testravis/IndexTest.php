<?php
namespace testravis;

use PHPUnit_Framework_TestCase;

class IndexTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }
    public function tearDown()
    {
    }
    public function testHelloWorld()
    {
        $h = new HelloWorld();
        $this->assertEquals('Hello', $h->hello());
    }
}
