<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartRequest extends FormRequest
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
            'workName[]'    => 'nullable|array',
            'workName.*'    => 'nullable|string|min:2|max:250',
            'workCity[]'    => 'nullable|array',
            'workCity.*'    => 'nullable|string|min:2|max:250',
            'workEmp[]'     => 'nullable|array',
            'workEmp.*'     => 'nullable|string|min:2|max:250',
            'workStart[]'   => 'nullable|array',
            'workStart.*'   => 'nullable|date',
            'workEnd[]'     => 'nullable|array',
            'workEnd.*'     => 'nullable|date',
            'workAbout[]'   => 'nullable|array',
            'workAbout.*'   => 'nullable|string|min:2|max:250',

            'eduDeg[]'      => 'nullable|array',
            'eduDeg.*'      => 'nullable|string|min:2|max:250',
            'eduCity[]'     => 'nullable|array',
            'eduCity.*'     => 'nullable|string|min:2|max:250',
            'eduSchool[]'   => 'nullable|array',
            'eduSchool.*'   => 'nullable|string|min:2|max:250',
            'eduStart[]'    => 'nullable|array',
            'eduStart.*'    => 'nullable|date',
            'eduEnd[]'      => 'nullable|array',
            'eduEnd.*'      => 'nullable|date',
            'eduAbout[]'    => 'nullable|array',
            'eduAbout.*'    => 'nullable|string|min:2|max:250',

            'langName[]'    => 'nullable|array',
            'langName.*'    => 'nullable|string|min:2|max:250',
            'langDeg[]'     => 'nullable|array',
            'langDeg.*'     => 'nullable|string|in:A1,A2,B1,B2,C1,C2',

            'skillName[]'    => 'nullable|array',
            'skillName.*'    => 'nullable|string|min:2|max:250',
            'skillDeg[]'     => 'nullable|array',
            'skillDeg.*'     => 'nullable|string|in:Zaawansowany,Doświadczony,Wprawiony,Początkujący,Nowicjusz',

            'hobbyName[]'    => 'nullable|array',
            'hobbyName.*'    => 'nullable|string|min:2|max:250',
        ];
    }
}
