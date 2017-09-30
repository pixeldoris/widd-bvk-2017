<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialForm extends FormRequest
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
            'facebook' => 'bail|required|string',
            'facebook-url' => 'bail|required|string',
            'instagram' => 'bail|required|string',
            'instagram-url' => 'bail|required|string',
            'linkedin' => 'bail|required|string',
            'twitter' => 'bail|required|email',
            'twitter-url' => 'bail|required|email',
        ];
    }

    /**
     * Change the validation messages
     *
     * @author Jonna Hedlund
     * @return string
     */
    public function messages()
    {
        return [
            'phone.required' => 'Du måste ange ett telefonnummer',
            'phone.string' => 'Are you trying to write something weird?',
            'email.required' => 'Du måste ange en e-postadress',
            'email.email' => 'Ogiltig e-postadress!'
        ];
    }
}
