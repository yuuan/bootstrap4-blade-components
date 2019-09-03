@component('components.form-groups.one-column.frame', [
    'for' => $id ?? $name,
    'class' => $frameClass ?? null,
])
    @slot('label')
        {{ $label }}
    @endslot
    <div class="input-group">
        @component('components.elements.input-group', [
            'id'   => $id ?? $name,
            'name' => $name,
        ])
            @slot('before')
                {{ $before ?? '' }}
            @endslot
            @slot('after')
                {{ $after ?? '' }}
            @endslot
        @endcomponent
    </div>
    @include('components.elements.errors', [
        'name' => $name,
    ])
@endcomponent
