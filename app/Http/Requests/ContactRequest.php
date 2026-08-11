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
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|min:2|max:50',
            'email'=> ['required', 'min:5', 'max:100', 'email'],
            'subject'=> 'required',
            'message'=> 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=> 'Пожалуйста, введите имя',
            'email.required'=> 'Пожалуйста, введите почту',
            'subject.required'=> 'Пожалуйста, введите тему',
            'message.required'=> 'Пожалуйста, введите сообщение',
            'email.email'=> 'Пожалуйста, введите корректную почту',
            'name.min'=> 'Имя должно быть не менее 2 символов',
            'name.max'=> 'Имя должно быть не более 50-ти символов',
        ];
    }
}
