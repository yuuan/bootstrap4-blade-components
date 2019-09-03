<div class="form-group {{ $class ?? '' }}">
    <label @isset($for) for="{{ $for }}" @endisset>{{ $label ?? '' }}</label>
    {{ $slot }}
</div>
