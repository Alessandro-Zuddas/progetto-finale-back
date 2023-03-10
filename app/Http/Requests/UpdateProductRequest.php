<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            "name" => "required|string|max:100",
            "description" => "required|string",
            "image" => "nullable|image|max:2048",
            "price" => "required|decimal:2|min:0.01",
            "is_visible" => "required|boolean",
            "category" => "required|string"
        ];
    }
}
