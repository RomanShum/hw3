<?php

declare(strict_types=1);

namespace romanshumakov\Hwcomposer;

class StringLength{
    public function getLength(string $str): int {
        return mb_strlen($str);
    }
}