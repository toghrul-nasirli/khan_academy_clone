<?php

namespace App\Http\Requests\Supporter;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSupporterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'covid_19' => ['boolean'],
            'logo' => ['nullable', 'image', "unique:supporters,logo,{$this->supporter->id}"]
        ];
    }

    public function messages()
    {
        return [
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
