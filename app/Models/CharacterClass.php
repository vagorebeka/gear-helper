<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'name',
        'stat1',
        'stat2',
        'stat3',
        'stat4',
        'stat5'
    ];

    protected $fillable = [
        'name',
        'stat1',
        'stat2',
        'stat3',
        'stat4',
        'stat5'
    ];
}
