<select
    class="custom-select @if ($errors->has($name)) is-invalid @endif"
    id="{{ $id ?? $name }}"
    name="{{ $name }}"
    @unless (empty($required))
        required
    @endunless
    @unless (empty($autofocus))
        autofocus
    @endunless
>
    @empty($required ?? true)
        <option value=""></option>
    @endempty
    @foreach ($options as $key => $value)
        @empty($value['options'])
            @include('components.elements.option')
        @else
            @php $group = $value; @endphp
            <optgroup label="{{ $group['name'] }}">
                @foreach ($group['options'] as $key => $value)
                    @include('components.elements.option')
                @endforeach
            </optgroup>
        @endempty
    @endforeach
</select>
