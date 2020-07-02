<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtEmail' => 'required|regex:/^[\w]{2,}@[\w]{2,}(\.[\w]{2,}){1,2}$/',
            'txtPassword' => 'required|min:6|max:15'
        ];
    }

    public function messages()
    {
        return [
            'txtEmail.required' => 'Địa chỉ email không được để trống',
            'txtEmail.regex' => 'Sai định dạng địa chỉ email',
            'txtPassword.required' => 'Mật khẩu không được để trống',
            'txtPassword.min' => 'Mật khẩu phải lớn hơn 5 kí tự',
            'txtPassword.max' => 'Mật khẩu phải bé hơn 16 kí tự'
        ];
    }
}
