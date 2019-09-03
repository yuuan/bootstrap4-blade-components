<option
    value="{{ $key }}"
    @if (
        strval(($old = old($name))) === strval($key)
    || (
        $old === null && isset($default) && strval($default) === strval($key)
    ))
        selected
    @endif
>
    {{ $value }}
</option>
