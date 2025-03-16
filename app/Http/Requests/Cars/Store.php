<?php

namespace App\Http\Requests\Cars;

use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $transmissions = config('app-cars.transmissions');

        return [
            'brand' => 'required|min:2|max:64',
            'model' => 'required|min:2|max:64',
            'transmission' => ['required', Rule::in(array_keys($transmissions))],
            'win' => ['required', 'min:4', 'max:14', $this->winUniqueRule()],
        ];
    }
    public function attributes()
    {
        return[
            'brand' => 'Марка',
            'model' => 'Модель',
            'transmission' => 'Коробка передач',
            'win' => 'Номер вин'
        ];
    }

    protected function winUniqueRule(){
        return Rule::unique(Car::class, 'win')->whereNull('deleted_at');
    }

}
