<?php

namespace Tests\Unit\Lessons;

use Lessons\ArrayTasks;
use PHPUnit\Framework\TestCase;

class ArrayTasksTest extends TestCase
{
    /**
     * @dataProvider sumOfArrayProvider
     */
    public function testSumOfArray($expected, $integers): void
    {
        $result = (new ArrayTasks())->sumOfArray($integers);

        $this->assertSame($expected, $result);
    }

    private function sumOfArrayProvider(): array
    {
        return [
            [4, [2, 2]],
            [-1, [0, -1]],
            [2, [1, 0, 2, -1]],
        ];
    }
}
