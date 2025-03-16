<x-layout.main title="Корзина">
    <a href="{{ route('cars.index') }}">К авто</a>
    <hr>
    <div class="row">
        @foreach($cars as $car)
            <div class="col m-3">
                <h3>{{ $car->brand }} {{ $car->model }}</h3>

                <x-form method="put" :action="route('cars.restore', [$car->id])">
                    <button class="btn btn-success">Восстановить</button>
                </x-form>
            </div>
        @endforeach
    </div>


</x-layout.main>

