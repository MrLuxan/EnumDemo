<?php
namespace App\Enums;

enum SatisfactionEnum:int
{
    case VeryDissatisfied = 1;
    case Dissatisfied = 2;
    case OK = 3;
    case Satisfied = 4;
    case VerySatisfied = 5;

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}