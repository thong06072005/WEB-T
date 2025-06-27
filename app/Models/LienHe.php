<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\LienHeFactory;

class LienHe extends Model
{
    use HasFactory;
    protected $table = 'thong_tin_gop_y';

    public $timestamps = false;
    protected static function newFactory()
    {
        return  LienHeFactory::new();
    }
}
