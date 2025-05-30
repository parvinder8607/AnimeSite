<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trendlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'mal_id',
        'title',
        'image_url',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
