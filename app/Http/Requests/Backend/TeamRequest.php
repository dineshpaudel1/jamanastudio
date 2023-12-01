<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
        $rules= [
            'name' => 'required',
            'rank'=>'required',
            'position'=>'required',
            'description' => 'required|max:150',
            'facebook' => 'required|url',
            'linked_in' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',
        ];
        if ($this->isMethod('post')) {
            $rules['image_file'] = 'required';
        }
        return $rules;
    }
    function messages():array
    {
       return [
           'name.required'=>'Enter name',
           'rank.required'=>'Enter rank',
           'description.required'=>'Enter description',
           'description.max' => 'Description must be less than 150 characters',
           'image_file.required'=>'Upload Image',
           'position.required'=>'Enter position',
           'facebook.required' => 'Enter Facebook link',
           'facebook.url' => 'Invalid Facebook URL',
           'linked_in.required' => 'Enter LinkedIn link',
           'linked_in.url' => 'Invalid LinkedIn URL',
           'twitter.required' => 'Enter Twitter link',
           'twitter.url' => 'Invalid Twitter URL',
           'instagram.required' => 'Enter Instagram link',
           'instagram.url' => 'Invalid Instagram URL',
       ];
    }
}
