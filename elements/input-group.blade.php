<div class="input-group">
    {{ $before ?? '' }}
    @include('components.elements.input', [
        'id'   => $id ?? $name,
        'name' => $name,
    ])
    {{ $after ?? '' }}
</div>
