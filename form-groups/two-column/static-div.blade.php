<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ $label ?? '$label is not defined.' }}</label>
    <div class="col-sm-10">
        <div class="form-control-plaintext">
            @if ($escape ?? true)
                {{ $value ?? '' }}
            @else
                {!! $value ?? '' !!}
            @endif
        </div>
    </div>
</div>
