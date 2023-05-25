<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Enums\TitleEnum;
use App\Enums\SatisfactionEnum;

class Preson extends Model
{
    use HasFactory;

    public $timestamps = false; //by default timestamp true

    protected $casts = [
        'email_verified_at' => 'datetime',
        'title' => TitleEnum::class,
        'satisfaction' => SatisfactionEnum::class,
    ];
}
