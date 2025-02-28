<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class Save extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:100',
            'content' => 'required|min:10|max:1000',
        ];
    }
    public function attributes()
    {
        return[
            'title' => 'Заголовок',
            'content' => 'Содержимое',
        ];
    }
}
