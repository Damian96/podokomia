<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testConstructor()
    {
        $functions = new Functions();

        $this->assertNotEmpty($functions->actions);
        $this->assertNotEmpty($functions->greekActions);
        $this->assertNotEmpty($functions->englishActions);
        $this->assertEquals($functions->actions, array_merge($functions->greekActions, $functions->englishActions));
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}