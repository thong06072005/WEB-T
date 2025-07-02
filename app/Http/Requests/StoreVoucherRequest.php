<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVoucherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
    return [
        'ma_giam_gia' => 'required|string|max:255',
        'phuong_thuc' => 'required|string|max:50',
        'gia_tri' => 'required|integer',
        'ngay_hieu_luc' => 'required|date',
        'ngay_het_han' => 'required|date|after:ngay_hieu_luc',
        'bac_thanh_vien_ap_dung' => 'nullable|integer',
    ];
}

}
