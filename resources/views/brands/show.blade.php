<x-layout.main title="Бренд #{{ $brand->id }}">
    <a href="{{ route('brands.index') }}">Главная</a>
    <hr>
    <div>{{ $brand->id }}</div>
    <div>{{ $brand->title }}</div>

    <x-form method="delete" :action="route('brands.destroy', [ $brand->id ])">
        <button class="btn btn-danger">Удалить</button>
    </x-form>
</x-layout.main>
