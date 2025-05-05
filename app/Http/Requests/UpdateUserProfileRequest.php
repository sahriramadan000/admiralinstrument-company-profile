<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserProfileRequest extends FormRequest
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
            'email'         => 'required|string|email:rfc,dns|max:250|unique:users,email,'.Auth::user()->id,
            'username'      => 'required|string|max:250|unique:users,username,'.Auth::user()->id,
            'password'      => 'nullable|string|min:8|confirmed',
            'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'          => 'Please enter the user name.',
            'name.max'               => 'The name may not exceed 250 characters.',
            'email.required'         => 'Please enter an email address.',
            'email.email'            => 'Please provide a valid email address.',
            'email.max'              => 'The email address may not exceed 250 characters.',
            'email.unique'           => 'This email address is already in use. Please use a different one.',
            'username.required'      => 'Please enter a username.',
            'username.max'           => 'The username may not exceed 250 characters.',
            'username.unique'        => 'This username is already in use. Please choose another one.',
            'password.min'           => 'The password must be at least 8 characters.',
            'password.confirmed'     => 'Password confirmation does not match.',
            'avatar.image'           => 'The avatar must be an image.',
            'avatar.mimes'           => 'The avatar must be a file of type: jpeg, png, jpg, gif, svg, or webp.',
            'avatar.max'             => 'The avatar may not be larger than 2MB.',
        ];
    }
}
