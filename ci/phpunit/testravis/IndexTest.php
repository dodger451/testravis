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
        $hello = $this->getHelloWorld();
        $this->assertEquals('Hello', $hello->hello());
    }

    /**
     * @return HelloWorld
     */
    protected function getHelloWorld()
    {
        $hello = new HelloWorld();
        return $hello;
    }
}
