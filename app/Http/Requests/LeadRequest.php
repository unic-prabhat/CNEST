<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
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

            'firstname' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'postcode' => 'required|number',
            'town' => 'required',
            'country' => 'required',
            'email' => 'required',
            'mobilenumber' => 'required|number'
        ];
    }
}
