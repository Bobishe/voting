<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicants extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
        'number_group',
        'voice',
        'department',
    ];
}
