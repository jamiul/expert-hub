<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeminarRequest extends FormRequest
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
            'title' => 'required',
            'seminar_mode_id' => 'nullable',
            'seminar_software_id' => 'nullable',
            'software_description' => 'nullable',
            'language_id' => 'nullable',
            'organiser_certificate' => 'nullable',
            'user_id' => 'nullable',
            'instructor_descriptions' => 'nullable',
            'slug' => 'nullable',
            'course_objectives' => 'nullable',
            'learning_outcomes' => 'nullable',
            'teaching_learning_methods' => 'nullable',
            'teaching_resources' => 'nullable',
            'seat' => 'nullable',
            'active' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'This title field is required'
        ];
    }
}
