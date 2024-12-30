<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
            'phone'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'subject'=> 'required|max:255',
            'body'=> 'required'
        ];
    }
}
