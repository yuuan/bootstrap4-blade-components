<div class="form-group row">
    <label for="{{ $id ?? $name }}" class="col-sm-2 col-form-label">{{ $label ?? '$label is not defined.' }}</label>
    <div class="col-sm-10">
        @foreach ($options as $option)
            @include('components.elements.input-checkbox', array_merge([
                'id'     => null,
                'label'  => null,
                'name'   => $name.'[]',
            ], $option))
        @endforeach
        @include('components.elements.errors', [
            'name'   => $name,
            'always' => true,
        ])
    </div>
</div>
