<x-layout.main title="Brands">
    <a href="{{ route('brands.create') }}">Добавить бренд</a>
    <hr>
    @if($brands->isNotEmpty())
        <div class="row">
            @foreach($brands as $brand)
                <div class="col col-12 mt-3">
                    <h3>{{ $brand->title }}</h3>
                    <a href="{{ route('brands.show', [ $brand->id ]) }}">Больше</a> |
                    <a href="{{ route('brands.edit', [ $brand->id ]) }}">Редактировать</a>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">Записей нет, делайте первую</div>
    @endif
</x-layout.main>
