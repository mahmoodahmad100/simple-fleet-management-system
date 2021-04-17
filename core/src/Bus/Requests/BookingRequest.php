<?php

namespace Core\Bus\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'trip_id'         => 'required|integer',
                    'number_of_seats' => 'required|integer',
                ];
            }
            case 'PUT': {
                return [
                    'trip_id'         => 'nullable|integer',
                    'number_of_seats' => 'nullable|integer',
                ];
            }
        }
    }
}
