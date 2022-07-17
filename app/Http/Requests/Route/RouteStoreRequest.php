<?php

namespace App\Http\Requests\Route;

use Illuminate\Foundation\Http\FormRequest;

class RouteStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:60',
            'from' => 'required|string|max:300',
            'to' => 'required|string|max:300',
            'range' => 'required|integer',
        ];
    }
}
