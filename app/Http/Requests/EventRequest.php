<?php

namespace App\Http\Requests;

use App\Rules\GreaterThanCurrentDate;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'localisation' => 'required|string|max:255',
            'date' => ['required', 'date', new GreaterThanCurrentDate],
            'price' => 'required|numeric',
            'totalPlace' => 'required|numeric',
            'reservationType' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => '',
            'user_id' => '',

        ];
    }
}
