@component('components.form-groups.one-column.frame', [ 'for' => $id ?? $name ])
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
