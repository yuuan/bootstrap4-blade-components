@component('components.form-groups.two-column.frame', [
    'for'   => $id ?? $name,
    'left'  => $left ?? $left = 2,
    'right' => $right ?? (12 - $left),
])
    @slot('label')
        {{ $label }}
    @endslot
    @include('components.elements.custom-select', [
        'id'      => $id ?? $name,
        'name'    => $name,
        'options' => $options,
    ])
    @include('components.elements.errors', [
        'name'    => $name,
    ])
@endcomponent
