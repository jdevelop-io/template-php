<?php

declare(strict_types=1);

namespace Jdevelop\TemplatePhp\Test\Unit;

use Jdevelop\TemplatePhp\Calculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Calculator::class)]
final class CalculatorTest extends TestCase
{
    public function testAdd1Plus2Equals3(): void
    {
        $calculator = new Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}
