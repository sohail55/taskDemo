<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeComplaintInfo extends FormRequest

{
    /**

     * Determine if the user is authorized to make this request.

     *

     * @return bool

     */

    public function authorize() {
        return true;
    }

    /**

     * Get the validation rules that apply to the request.

     *

     * @return array

     */

    public function rules() {
        return [
            'owner' => 'required',
            'agency_name' => 'required',
            'phone' => 'required',
            'comments' => 'required',
        ];
    }

    public function messages() {
        return [
            'username.required' => 'Please enter you name',
        ];
    }

}

