@props([
    'label',
    'name',
    'defaultValue' => '',
])

<div>
    {{ $label }}
    <input name="{{ $name }}" value="{{ $defaultValue }}">
    @error($name)
    <div style="color: red">{{ $message }}</div>
    @enderror
</div>
