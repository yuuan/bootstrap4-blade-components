@component('components.form-groups.two-column.frame', [
    'for'   => $id ?? $name,
    'left'  => $left ?? $left = 2,
    'right' => $right ?? (12 - $left),
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
