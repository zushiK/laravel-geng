<?php

namespace App\Enums;

enum OperatorIsActive: int
{
    case Inactive = 0;
    case Active = 1;

    public function label(): string
    {
        return match ($this) {
            OperatorIsActive::Inactive => '非稼働',
            OperatorIsActive::Active => '稼働',
        };
    }
}
