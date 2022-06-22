<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendingCuisineRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nameTH' => 'require|string',
            'nameEN' => 'require|string',
            'description' => 'require|string',
            'nationality' => 'require',
            'image' => 'require'
        ];
    }

    public function messages()
    {
        return [
            'nameTH.required' => 'Name(Thai) is required',
            'nameEN.required' => 'Name(English) is required',
            'description.required' => 'Description is required',
            'Nationality.required' => 'Nationality is required',
            'images.required' => 'Images is required',
        ];
    }
}
