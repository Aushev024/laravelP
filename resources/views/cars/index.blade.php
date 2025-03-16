<x-layout.main title="Cars">
    <a href="{{ route('cars.create') }}">Добавить авто</a>
    |
    <a href="{{ route('cars.trashed') }}">Корзина</a>
    <hr>
    <div class="row">
        @foreach($cars as $car)
            <div class="col m-3">
                <h3>{{ $car->brand }} {{ $car->model }}</h3>
                <div>{{ $car->win }}</div>
                <a href="{{ route('cars.edit', [$car->id]) }}">Редактировать</a>
                |
                <a href="{{ route('cars.show', [$car->id]) }}">Показать</a>
            </div>
        @endforeach
    </div>


</x-layout.main>

