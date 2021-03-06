<?php

namespace Core\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        if (request()->route()->getName() == 'api.v1.login') {
           return [
               'email'    => 'required|email',
               'password' => 'required|string|max:15',
           ];
        }

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name'     => 'required|string',
                    'email'    => 'required|email|unique:users',
                    'password' => 'required|string|max:15',
                ];
            }
            case 'PUT': {
                return [
                    'name'     => 'nullable|string',
                    'email'    => 'nullable|email',
                    'password' => 'nullable|string|max:15',
                ];
            }
        }
    }
}
