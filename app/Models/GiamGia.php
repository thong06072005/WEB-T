<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiamGia extends Model
{
    protected $table = 'giam_gia';
    protected $primaryKey = 'ma_giam_gia';
    public $timestamps = false;

    protected $fillable = [
        'ma_giam_gia',
        'phuong_thuc',
        'gia_tri',
        'ngay_hieu_luc',
        'ngay_het_han',
        'bac_thanh_vien_ap_dung',
    ];
}
