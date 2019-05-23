<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Reservation;
class StoreUserInfo extends FormRequest
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
            'title'=> 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            //'email' => 'required|unique|regex:/^.+@.+$/i',
            'nation' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'troom' => 'required',
            'tbed' => 'required',
            'nroom' => 'required',
            'meal' => 'required',
            'cin' => 'required',
            'cout' => 'required'
        ];
    }

    public function messages()
    {
        return [
         'title.required' => 'Please select title', 
         'cin.required' => 'Please select check-in',
         'cout.required' => 'Please select check-out',
         'fname.required' => 'Please insert first name',
         'lname.required' => 'Please insert last name',
         'email.required' => 'Please insert email',
         'nation.required' => 'Please select nationality',
         'country.required' => 'Please select country',
         'phone.required' => 'Please insert phone number',
         'troom.required' => 'Please select room type',
         'tbed.required' => 'Please select bed type',
         'nroom.required' => 'Please select number of rooms',
         'meal.required' => 'Please select meal plan',
        ];
    }



}
