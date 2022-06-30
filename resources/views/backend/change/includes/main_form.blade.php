<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('data', 'data *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('data', null, ['class' => 'ckeditor form-control', 'id' => 'data', 'placeholder' => 'data']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'data'])
        </div>
    </div>

    {{-- <div class="form-group row mb-3">
        {{ Form::label('stakeholder', 'Stakeholders*', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('stakeholder', null, ['class' => 'ckeditor form-control', 'id' => 'stakeholder', 'placeholder' => 'Stakeholders']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'stakeholder'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('timelines', 'Timelines *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('timelines', null, ['class' => 'ckeditor form-control', 'id' => 'timelines', 'placeholder' => 'Timelines']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'timelines'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('outcomes', 'Outcomes *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('outcomes', null, ['class' => 'ckeditor form-control', 'id' => 'outcomes', 'placeholder' => 'Outcomes']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'outcomes'])
        </div>
    </div> --}}

</div>

<div class="card-footer">
    {{ Form::button('Submit',['type' =>'submit','class' => 'btn btn-primary']) }}
</div>
