<div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
        @include('components.elements.divider')
    </div>
</div>
@component('components.form-groups.two-column.frame')
    @slot('label')
        {{ $label }}
    @endslot
@endcomponent
