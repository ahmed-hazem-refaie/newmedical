<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingRequest extends FormRequest
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
        $rules =  [
            "name_ar" =>  "required|string|max:180|unique:settings,name_ar",
            "name_en" => "required|string|max:180|unique:settings,name_en",
            "description_ar" => "required|string|max:255",
            "description_en" =>  "required|string|max:255",
            "icon" =>  "nullable|string",

        ];



        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $setting = $this->route()->parameter('setting');

            $rules['name_ar'] = [
                'required',
                'string',
                'min:5',
                'max:180',
                Rule::unique('settings','name_ar')->ignore($setting),
            ];
            $rules['name_en'] = [
                'required',
                'string',
                'min:5',
                'max:180',
                Rule::unique('settings','name_en')->ignore($setting),
            ];
        }
        return $rules ;
    }
}
