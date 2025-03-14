<x-layout.main title="Авто #{{ $car->id }}">
   <div>{{ $car->id }}</div>
   <div>{{ $car->created_at }}</div>
   <div>{{ $car->model }}</div>
   <div>{{ $car->brand }}</div>
   <div>{{ $car->transmission }}</div>
    <x-form method="DELETE" :action="route('cars.destroy', [$car->id])">
        <button class="btn btn-danger">Удалить</button>
    </x-form>
</x-layout.main>

