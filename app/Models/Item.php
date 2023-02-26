<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'name',
        'stat1',
        'stat1amount',
        'stat2',
        'stat2amount',
        'stat3',
        'stat3amount',
        'slot',
        'material'
    ];

    protected $fillable = [
        'name',
        'stat1',
        'stat1amount',
        'stat2',
        'stat2amount',
        'stat3',
        'stat3amount',
        'slot',
        'material'
    ];
}
