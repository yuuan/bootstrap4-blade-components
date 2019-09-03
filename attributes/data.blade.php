@foreach ($data ?? [] as $key => $value)
    data-{{ $key }}="{{ $value }}"
@endforeach
