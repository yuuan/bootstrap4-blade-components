<div class="form-group row {{ $class ?? '' }}">
    <label @isset($for) for="{{ $for }}" @endisset class="col-sm-{{ $left ?? $left = 2 }} col-form-label">{{ $label ?? '' }}</label>
    <div class="col-sm-{{ $right ?? (12 - $left) }}">
        {{ $slot }}
    </div>
</div>
