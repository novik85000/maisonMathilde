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
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required',
            'name_fr' => 'required',
            'name_en' => 'required',
            'price' => 'required|max:7',
            'weight' => 'required',
            'width' => 'required',
            'length' => 'required',
            'height' => 'required',
            'measure_id' => 'required',
            'description_fr' => 'required',
            'description_en' => 'required',
            'materials_fr' => 'required',
            'materials_en' => 'required',
            'instruction_fr' => 'required',
            'instruction_en' => 'required',

        ];
    }
}

