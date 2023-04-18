<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightlistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'departureAirport' => 'required|exists:airports,id',
            'arrivalAirport' => 'required|exists:airports,id',
            'departureDate' => 'required|date',
            'arrivalDate' => 'required|date',
            'numberPassenger' => 'required|integer|min:1',
            'class' => 'required|exists:cabins,id',
        ];
    }
}
