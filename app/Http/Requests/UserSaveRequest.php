<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSaveRequest extends FormRequest
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
        return [
      
             'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|string',
            'address'=>'required|string',
            'dob'=>'required|date',
            'photo'=>'image|mimes:jpg,png', 

        ];
    }
}
