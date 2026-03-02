<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'description'=>'required',
            'map'=>'nullable',
            'date'=>'nullable'
        ];
    }
    public function messages(): array
    {
        return[
            'name.required'=>'El nombre es requerido',
            'name.max'=>'El nombre puede tener un máximo de 30 caracteres'
        ];
    }
}
