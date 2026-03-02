<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageGenerationRequest extends FormRequest
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
            'image' => "required|file|mime:jpg,jpeg,png|size:5120",
        ];
    }

    public function mesages(): array 
    {
        return [
            'image.required' => "Image is required",
            'image.file' => "The image must be a file",
            'image.mime' => "The image must be a file of type: jpg, jpeg, png",
            'image.size' => "The image must not be greater than 5MB",
        ];
    }
}
