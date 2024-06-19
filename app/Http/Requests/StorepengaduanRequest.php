<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepengaduanRequest extends FormRequest
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
            "name" => ["require", "string"],
            "email" => ["require", "string"],
            "address" => ["require", "string"],
            "no_hp" => ["require", "string"],
            "deskripsi_keluhan" => ["require", "string"],
        ];
    }
}
