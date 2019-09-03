<textarea
    class="form-control @if ($monospace ?? false) text-monospace @endif @if ($errors->has($name)) is-invalid @endif"
    id="{{ $id ?? $name }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder ?? null }}"
    rows="{{ $rows ?? 3 }}"
    @unless (empty($required))
        required
    @endunless
    @unless (empty($autofocus))
        autofocus
    @endunless
>{{ old($name, $default ?? null) }}</textarea>
