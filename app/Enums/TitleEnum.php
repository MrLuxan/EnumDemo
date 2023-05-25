<?php
namespace App\Enums;

enum TitleEnum:string
{
    case Mr = 'mr';
    case Mrs = 'mrs';
    case Miss = 'miss';
    case Rev = 'rev';
    case Other = 'other';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}