<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:30',
            'subject'=>'required|max:100',
            'text'=>'required'
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'El nombre es requerido',
            'name.max'=>'El nombre no puede superar 30 caracteres',
            'subject.required'=>'El sujeto es requerido',
            'subject.max'=>'El sujeto no puede superar los 100 caracteres',
            'text'=>'El texto es requerido'
        ];
    }
}
