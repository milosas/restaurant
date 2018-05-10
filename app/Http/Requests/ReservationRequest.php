<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
        'name' => 'required',
        'surname' => 'required',
        'email' => 'required',
        'phone_number' => 'required',
        'number_of_people' => 'required',
        'date_reservation' => 'required',
        'time_of_reservation' => 'required',
        'message' => 'required',

        ];
    }
}
