<x-layout.main title="Обновить авто #{{ $car->id }}">
    <x-form action="{{ route('cars.update', [$car->id]) }}" method="put">

        @bind($car)
            @include('cars.form')
        @endbind

        <div class="mb-3">
            <button class="btn btn-success">Сохранить</button>
        </div>

    </x-form>
</x-layout.main>

