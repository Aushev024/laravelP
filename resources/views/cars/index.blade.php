<x-layout.main title="Cars">
    <a href="{{ route('cars.create') }}">Create cars</a>
    <div class="row">
        @foreach($cars as $car)
            <div class="col m-3">
                <h3>{{ $car->brand }} {{ $car->model }}</h3>
                <a href="{{ route('cars.edit', [$car->id]) }}">Редактировать</a>
            </div>
        @endforeach
    </div>


</x-layout.main>

