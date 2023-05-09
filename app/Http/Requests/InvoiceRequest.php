<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
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
            'invoice-date' => 'required',
            'username' => 'required',
            'phone' => 'required|numeric',
            'product-id' => 'required',
            'product-qty' => 'required',
            'Salesperson' => 'required',
            'product-serial' => 'required',
            'invoice-serial' => 'required|unique:transactions,serial_number',
        ];
    }
        public function messages()
        {
            return[
            'invoice-date.required'=>'يجب تحديد التاريخ ',
            'username.required'=>'يجب كتابه اسم المشتري ',
            'phone.required'=>'يجب كتابه رقم هاتف المشتري ',
            'phone.numeric'=>'يجب كتابه ارقام في خانه رقم المشتري',
            'product-id.required'=>'يجب اختيار المنتج ',
            'product-qty.required'=>'يجب تحديد عدد القطع المراد شرائها  ',
            'salesperson.required'=>'يجب كتابه اسم البائع',
            'product-serial.required'=>' يجب اختيار المنتج الصحيح',
            'invoice-serial.required'=>'يجب تحديد الرقم التسلسلي للفاتوره ',
            'invoice-serial.unique'=>'رقم الفاتوره موجود من قبل  ',
        ];
        }
}
