<?php

namespace App\Http\Requests\Supporter;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupporterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'covid_19' => ['boolean'],
            'logo' => ['required', 'image', 'unique:supporters']
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bölməsi boş buraxıla bilməz!',
            'image' => 'Fayl şəkil formatında olmalıdır!',
            'unique' => ':attribute bölməsi təkrarlanmamalıdır!',
        ];
    }

    public function attributes()
    {
        return [
            'covid_19' => 'COVID-19 cavabımızın tərəfdarı',
            'logo' => 'Logo'
        ];
    }
}
