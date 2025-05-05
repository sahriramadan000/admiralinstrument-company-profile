<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreUserRequest extends FormRequest
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
            'name'          => 'required|string|max:250',
            'email'         => 'required|string|email:rfc,dns|max:250|unique:users,email',
            'username'      => 'required|string|max:250|unique:users,username',
            'password'      => 'required|string|min:8',
            'roles'         => 'required',
            'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
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
            'name.required'          => 'Please enter a name.',
            'name.max'               => 'Name cannot exceed 250 characters.',
            'email.required'         => 'Please enter an email address.',
            'email.email'            => 'Enter a valid email address.',
            'email.max'              => 'Email cannot exceed 250 characters.',
            'email.unique'           => 'This email is already registered. Please use a different email.',
            'username.required'      => 'Please enter a username.',
            'username.max'           => 'Username cannot exceed 250 characters.',
            'username.unique'        => 'This username is already taken. Please choose another one.',
            'password.required'      => 'Please enter a password.',
            'password.min'           => 'Password must be at least 8 characters long.',
            'roles.required'         => 'Please select at least one role.',
            'avatar.image'           => 'The avatar must be an image file.',
            'avatar.mimes'           => 'The avatar must be a file of type: jpeg, png, jpg, gif, svg, webp.',
            'avatar.max'             => 'The avatar size cannot exceed 2MB.',
        ];
    }
}
