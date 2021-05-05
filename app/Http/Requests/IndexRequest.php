<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'image'         => 'nullable|image',
            'name'          => 'required|string|min:2|max:250',
            'surname'       => 'required|string|min:2|max:250',
            'email'         => 'required|email',
            'phone'         => 'nullable|string|min:6|max:12',
            'street'        => 'nullable|string|min:3|max:250',
            'code'          => 'nullable|string|min:3|max:12',
            'city'          => 'nullable|string|min:2|max:250',
            'birth'         => 'nullable|date|',
            'birthCity'     => 'nullable|string|min:2|max:250',
            'country'       => 'nullable|string|min:2|max:250',
            'drive[]'       => 'nullable|array',
            'drive.*'       => 'nullable|string|in:A (motocykl),AM (motorower),B (samochód osobowy),BE (B + przyczepa),C (samochód ciężarowy),CE (C + przyczepa),C1 (lekka ciężarówka),C1E (C1 + przyczepa),D (autobus),DE (D + przyczepa),D1 (mały autobus / bus),D1E (D1 + przyczepa),T (traktor)',
            'gender'        => 'nullable',
            'nationality'   => 'nullable|string|min:2|max:250',
            'marital'       => 'nullable|string|min:2|max:250',
            'linkedin'      => 'nullable|string|min:2|max:250',
            'web'           => 'nullable|string|min:2|max:250',
        ];
    }
}
