<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
    public function rules():array
    {
        $rules = [
            'name' => 'required|min:5',
            'slogan' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|regex:/^(97|98)\d{8}$/',
            'optional_email' => 'nullable|email|required_if:optional_email,!=,null',
            'mobile' => 'required|regex:/^(97|98)\d{8}$/',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
        ];

        // Conditionally add image validation only for the create action
        if ($this->isMethod('post')) {
            $rules['logo_header_file'] = 'required';
            $rules['hero_image_file'] = 'required';
        }

        return $rules;
    }
    public function messages():array
    {
        return [
            'name.required'=>'Enter your name',
            'name.min'=>'Your name must be more than 5character',
            'slogan.required'=>'Slogan required',
            'optional_email.required_if' => 'The optional email field is required when a value is provided.',
            'optional_email.email' => 'The optional email field must be a valid email format.',
            'logo_header_file.required'=>'Logo header required',
            'hero_image_file.required'=>'hero image required',
            'email.required'=>'Email required',
            'email.email' => 'Invalid email format',
            'address.required'=>'Address required',
            'phone.required'=>'Phone required',
            'phone.regex' => 'Invalid phone number format',
            'mobile.required'=>'Phone required',
            'mobile.regex' => 'Invalid mobile number format',
            'meta_title.required'=>'Meta Title required',
            'meta_description.required'=>'Meta Description required',
            'meta_keyword.required'=>'Meta Keyword required',
        ];
    }
}
