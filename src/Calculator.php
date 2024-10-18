<?php

declare(strict_types=1);

namespace Jdevelop\TemplatePhp;

final class Calculator
{
    public function add(int $int, int $int1): int
    {
        return $int + $int1;
    }
}
