<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeBean extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'level', 'harga', 'proses', 'ketinggian', 'variasi', 'asal'
    ];
}
