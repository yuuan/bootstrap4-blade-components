<div class="custom-control custom-checkbox pt-2 pb-0">
    <input
        class="custom-control-input @if ($errors->has($name)) is-invalid @endif {{ $class ?? '' }}"
        type="checkbox"
        id="{{ $id ?? "{$name}-{$value}" }}"
        name="{{ $name }}"
        value="{{ $value }}"
        @unless (empty($autofocus))
            autofocus
        @endunless
        @if (strval(($old = old($name))) === strval($value) || (
            $old === null && ($value === ($default ?? null) || in_array($value, $defaults ?? [], true))
        ))
            checked
        @endif
    >
    <label class="custom-control-label" for="{{ $id ?? "{$name}-{$value}" }}">
        {{ $label ?? $value }}
    </label>
</div>
