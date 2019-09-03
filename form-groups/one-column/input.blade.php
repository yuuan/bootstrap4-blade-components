@component('components.form-groups.one-column.frame', [
    'for' => $id ?? $name,
    'class' => $frameClass ?? null,
])
    @slot('label')
        {{ $label }}
    @endslot
    @include('components.elements.input', [
        'id'   => $id ?? $name,
        'name' => $name,
    ])
    @include('components.elements.errors', [
        'name' => $name,
    ])
@endcomponent
