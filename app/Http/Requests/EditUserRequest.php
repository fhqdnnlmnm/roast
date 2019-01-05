<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            //
            return [
                'profile_visibility' => 'sometimes|boolean'
            ];
        ];
    }

    public function messages(){
        return [
            'profile_visibility.boolean'=>'The profile visibility flag needs to be a boolean'
        ]
    }
}
