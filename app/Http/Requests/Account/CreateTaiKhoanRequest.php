<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaiKhoanRequest extends FormRequest
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
            'username'          => 'required|unique:admins,username',
            'password'          => 'required',
            'full_name'         => 'required',
            'email'             => 'email|required',
            'so_dien_thoai'     => 'digits:10|required|unique:admins,so_dien_thoai',
        ];
    }

    public function messages()
    {
        return [
            'required'          => ":attribute không được để trống!",
            'unique'            => ":attribute đã tồn tại trong hệ thống!",
            'email'             => ":attribute không đúng định dạng Email!",
            'digits'            => ":attribute không đúng định dạng số điện thoại!",
        ];
    }

    public function attributes()
    {
        return [
            'username'          => 'Username',
            'password'          => 'Mật Khẩu',
            'full_name'         => 'Họ Và Tên',
            'email'             => 'Email',
            'so_dien_thoai'     => 'Số Điện Thoại',
        ];
    }
}
