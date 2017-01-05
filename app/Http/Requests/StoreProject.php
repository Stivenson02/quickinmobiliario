<?php

namespace QuickInmobiliario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class StoreProject extends FormRequest
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
          'name' => 'required|unique:projects,name|max:150',
          'address' => 'required|max:75',
          'phone' => 'required|max:12',
          'description' => 'required',
          'built_area' => 'required',
          'unit_quantity' => 'required',
          'full_area' => 'required',
          'zone' => 'required|max:45',
          'city' => 'required|max:45',
          'neighborhood' => 'required|max:45'
        ];
    }

    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
