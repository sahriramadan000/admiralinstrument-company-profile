<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProductCategoryRequest extends FormRequest
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
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama Kategori produk wajib diisi.',
            'name.string' => 'Nama Kategori produk harus berupa teks.',
            'name.max' => 'Nama Kategori produk maksimal 100 karakter.',
        ];
    }
}
