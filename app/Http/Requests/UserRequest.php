<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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


        $rules =  [
            'name' => 'required|string|max:255',
        ];
        if ($this->method() == "POST") {
            $rules['email'] = 'required|string|email|max:255|unique:users';
            $rules['password'] = 'required|string|min:3|confirmed';
            return $rules;

        } elseif ($this->method() == "PUT") {
            return $rules;

        } else {
            return [];
        }

    }


    /**
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function getValidatorInstance()
    {

        $validator = parent::getValidatorInstance();

        if (!$validator->fails())
        {
            $input = $this->all();

            if ($this->method() == "POST") {
                $input['password'] = Hash::make($input['password']);

                $this->replace($input);
            }
            elseif ($this->method() == "PUT") {
                $this->replace($input);
            }
        }

        return $validator;
    }

}
