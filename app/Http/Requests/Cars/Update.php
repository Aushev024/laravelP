<?php

namespace App\Http\Requests\Cars;

class Update extends Store
{
    protected function winUniqueRule()
    {
        return parent::winUniqueRule()->ignore($this->car->id);
    }
}
