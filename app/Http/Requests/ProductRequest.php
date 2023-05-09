<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required|numeric',
            'color' => 'required',
            'quantity' => 'required',
            'size' => 'sometimes',
            'product_serial_number' => 'required',
            'price' => 'required',
        ];
    }
        public function messages()
        {
            return[
            'category_id.required'=>'يجب اختيار الصنف ',
            'category_id.numeric'=>'يجب ان تختار الصنف الصحيح ',
            'color.required'=>'يجب ادخال اللون',
            'quantity.required'=>'يجب ادخال الكميه',
            'size.required'=>'يجب ادخال المقاس',
            'size.numeric'=>'يجب ان يكون المقاس رقم ',
            'product_serial_number.required'=>'يجب ادخال الرقم المتسلسل',
            'product_serial_number.unique'=>' يجب ادخال الرقم المتسلسل غير مسجل من قبل',
            'price.required'=>'يجب ادخال السعر',
        ];
        }
}
