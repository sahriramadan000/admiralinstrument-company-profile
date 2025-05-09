<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'category' => 'nullable|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
    }

    /**
     * Get custom error messages for validation.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama proyek wajib diisi.',
            'name.string' => 'Nama proyek harus berupa teks.',
            'name.max' => 'Nama proyek maksimal 100 karakter.',

            'category.string' => 'Kategori harus berupa teks.',

            'image.image' => 'Gambar 1 harus berupa file gambar.',
            'image.mimes' => 'Gambar 1 harus bertipe jpeg, png, jpg, gif, svg, atau webp.',
            'image.max' => 'Ukuran Gambar 1 tidak boleh lebih dari 2MB.',
        ];
    }
}
