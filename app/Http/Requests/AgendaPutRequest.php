<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AgendaPutRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            "name" => "required|string|min:3|max:255",
            "email" => ['required', 'email', 'max:64', \Illuminate\Validation\Rule::unique('agendas')->ignore($request->email)],
            "tell" => ['required', 'string']
        ];
    }
}
