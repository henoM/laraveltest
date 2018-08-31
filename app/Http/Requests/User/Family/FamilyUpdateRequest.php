<?php

namespace App\Http\Requests\User\Family;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FamilyUpdateRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|numeric|min:6|max:99',
        ];
    }


    /**
     * @return array
     */
    public function inputs()
    {
        $request = $this->except('_token', 'home');

        $request['user_id'] = Auth::user()->id;

        return $request;
    }
}
