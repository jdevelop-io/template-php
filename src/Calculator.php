<?php

declare(strict_types=1);

namespace JDevelop\TemplatePhp;

final class Calculator
{
    public function add(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }
}
