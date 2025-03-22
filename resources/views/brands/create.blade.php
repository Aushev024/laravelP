<x-layout.main title="Добавить бренд">
    <x-form action="{{ route('brands.store') }}">
        @include('brands.form')
        <div class="mb-3">
            <button class="btn btn-success">Сохранить</button>
        </div>
    </x-form>
</x-layout.main>
