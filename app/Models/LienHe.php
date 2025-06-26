<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\LienHeFactory;

class LienHe extends Model
{
    use HasFactory;
    protected $table = 'thongtingopy';
    protected static function newFactory()
    {
        return  LienHeFactory::new();
    }
}