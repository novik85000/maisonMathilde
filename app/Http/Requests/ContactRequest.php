<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:50',
            'subject' => 'required|max:150',
            'email' => 'required|email|max:50',
            'message' => 'required|max:5000',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    /**
    public function messages()
    {
            return [
                'name.required' => 'Поле имя является обязательным',
                'email.required' => 'Поле email является обязательным',
                'message.required' => 'Поле сообщение является обязательным',
                'subject.required' => 'Поле тема является обязательным'
            ];
        }
     **/
}
