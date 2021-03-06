<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
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
            'term' => 'required',
            'stop_term' => 'required',
            'starting_quantity' => 'required',
            'starting_hashrate' => 'required',
            'reinvest' => '',
            'reinvest_period' => '',
            'reinvestments' => ''
        ];
    }
}
