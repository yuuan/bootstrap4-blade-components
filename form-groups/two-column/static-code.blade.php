<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ $label ?? '$label is not defined.' }}</label>
    <div class="col-sm-10">
        <pre class="form-control-plaintext"><code>{!! ($escape ?? true) ? e($value ?? '') : ($value ?? '') !!}</code></pre>
    </div>
</div>
