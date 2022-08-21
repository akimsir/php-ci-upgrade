<?php

namespace Tests\Unit\Lessons;

use PHPUnit\Framework\TestCase;
use Lessons\Example;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $expected = 'Hello!';
        $result   = (new Example())->run();

        $this->assertSame($expected, $result);
    }
}
