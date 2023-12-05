<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaiKhoanRequest extends FormRequest
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
            'id'                => 'required|exists:admins,id',
            'username'          => 'required|unique:admins,username,' . $this->id,
            'password'          => 'required',
            'full_name'         => 'required',
            'email'             => 'email|required',
            'so_dien_thoai'     => 'digits:10|required|unique:admins,so_dien_thoai,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'required'          => ":attribute không được để trống!",
            'unique'            => ":attribute đã tồn tại trong hệ thống!",
            'email'             => ":attribute không đúng định dạng Email!",
            'digits'            => ":attribute không đúng định dạng số điện thoại!",
            'exists'            => ":attribute không tồn tại!",
        ];
    }

    public function attributes()
    {
        return [
            'id'                => 'Tài Khoản',
            'username'          => 'Username',
            'password'          => 'Mật Khẩu',
            'full_name'         => 'Họ Và Tên',
            'email'             => 'Email',
            'so_dien_thoai'     => 'Số Điện Thoại',
        ];
    }
}
