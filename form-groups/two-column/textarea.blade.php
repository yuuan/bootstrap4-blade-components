@component('components.form-groups.two-column.frame', [
    'for'   => $id ?? $name,
    'left'  => $left ?? $left = 2,
    'right' => $right ?? (12 - $left),
])
    @slot('label')
        {{ $label }}
    @endslot
    @include('components.elements.textarea', [
        'id'   => $id ?? $name,
        'name' => $name,
    ])
    @include('components.elements.errors', [
        'name' => $name,
    ])
@endcomponent
