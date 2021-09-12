<?php

namespace App\Http\Requests\Work;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'info' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bölməsi boş buraxıla bilməz!',
            'max' => ':attribute bölməsi maksimum :max simvol ola bilər!',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Başlıq',
            'info' => 'İnformasiya',
        ];
    }
}
