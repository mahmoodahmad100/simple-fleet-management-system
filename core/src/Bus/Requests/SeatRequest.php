<?php

namespace Core\Bus\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeatRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET': {
                return [
                    'station1_id' => 'required|integer',
                    'station2_id' => 'required|integer',
                ];
            }
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [];
            }
            case 'PUT': {
                return [];
            }
        }
    }
}
