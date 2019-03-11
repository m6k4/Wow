<?php


class FirstTest extends PHPUnit_Framework_TestCase {

    public function testGreetings()
    {
        $greetings = 'Hello World';
        $this->assertEquals('Hello World', $greetings);
    }

}