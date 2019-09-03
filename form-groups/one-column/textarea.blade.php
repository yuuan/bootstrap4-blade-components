@component('components.form-groups.one-column.frame', [ 'for' => $id ?? $name ])
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
