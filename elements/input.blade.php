<input
    type="{{ $type ?? 'text' }}"
    class="form-control {{ $class ?? '' }} @if ($errors->has($name)) is-invalid @endif"
    id="{{ $id ?? $name }}"
    name="{{ $name }}"
    value="{{ old($name, $default ?? null) }}"
    placeholder="{{ $placeholder ?? null }}"
    @unless (empty($required))
        required
    @endunless
    @unless (empty($autofocus))
        autofocus
    @endunless
    @include('components.attributes.attributes')
    @include('components.attributes.data')
/>
