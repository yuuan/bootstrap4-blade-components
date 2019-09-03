<div class="form-check pt-2 pb-0">
    <input
        class="form-check-input @if ($errors->has($name)) is-invalid @endif"
        type="radio"
        id="{{ $id ?? "{$name}-{$value}" }}"
        name="{{ $name }}"
        value="{{ $value }}"
        @unless (empty($autofocus))
            autofocus
        @endunless
        @if (strval(($old = old($name))) === strval($value) || $old === null && $value === ($default ?? null))
            checked
        @endif
    >
    <label class="form-check-label" for="{{ $id ?? "{$name}-{$value}" }}">
        {{ $label ?? $value }}
    </label>
</div>
