<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LienHeRequest extends FormRequest
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
            'fullname' => 'required|string|min:2',
            'email' => 'required|email',
            'feedback' => 'required|min:20',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Họ và tên không được để trống.',
            'fullname.min' => 'Họ và tên phải có ít nhất 2 ký tự.',
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'feedback.required' => 'Nội dung góp ý không được để trống.',
            'feedback.min' => 'Nội dung góp ý phải có ít nhất 20 ký tự.',
        ];
    }
}
