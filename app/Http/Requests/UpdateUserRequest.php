<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            
            'name' => 'required|max:255',
            'username' => 'required|unique:users,username,'. $this->user.'|max:255',
            'email' => 'required|unique:users,email,'. $this->user.'|max:255',
            'phone' => 'required|unique:users,phone,'. $this->user.'|max:11|min:11',
            'password' => 'sometimes',
        ];
    }
    protected function prepareForValidation(){
        if($this->password == null){
            $this->request->remove('password');
        }
    }
        public function messages()
        {
            return[
            'name.required'=>'يجب ادخال الاسم',
            'username.required'=>'يجب ادخال اسم المستخدم',
            'username.unique'=>'اسم المستخدم موجود بالفعل , برجاء ادخال اسم مستخدم جديد',
            'email.required'=>'يجب ادخال الحساب',
            'email.unique'=>'هذا الحساب موجود بالفعل , برجاء ادخال حساب جديد',
            'phone.required'=>'يجب ادخال الهاتف',
            'phone.min'=>'يجب ان يكون الهاتف مكون من 11 رقم',
            'phone.max'=>'يجب ان يكون الهاتف مكون من 11 رقم',
            'phone.unique'=>'هذا الرقم موجود بالفعل , برجاء ادخال رقم جديد',
            'password.required'=>'يجب ادخال اسم كلمه السر',
        ];
        }
}
