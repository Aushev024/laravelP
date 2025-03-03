<x-layout.main title="Добавить авто">
    <x-form action="{{ route('cars.store') }}">

        <div class="mb-3">
            <x-form-input name="brand" label="Марка авто"/>
        </div>

        <div class="mb-3">
            <x-form-input name="model" label="Модель авто"/>
        </div>

        <div class="mb-3">
            <x-form-select name="transmission" label="Коробка передач" :options="$transmissions" placeholder="Не выбрано"/>
        </div>

        <div class="mb-3">
            <button class="btn btn-success">Сохранить</button>
        </div>

    </x-form>
</x-layout.main>

