<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    use HasFactory;

    protected $table = 'thong_tin_gop_y';
    public $timestamps = false;

    protected $fillable = ['fullname', 'email', 'NoiDungGopY'];
}
