<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('dataleft', 'Data Left Panel *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('dataleft', null, ['class' => 'ckeditor form-control', 'id' => 'dataleft', 'placeholder' => '']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'dataleft'])
        </div>
    </div>


    <div class="form-group row mb-3">
        {{ Form::label('dataright', 'Data Right Panel*', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('dataright', null, ['class' => 'ckeditor form-control', 'id' => 'dataright', 'placeholder' => '']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'dataright'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('datamain', 'Data Main *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('datamain', null, ['class' => 'ckeditor form-control', 'id' => 'datamain', 'placeholder' => '']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'datamain'])
        </div>
    </div>

</div>

<div class="card-footer">
    {{ Form::button('Submit',['type' =>'submit','class' => 'btn btn-primary']) }}
</div>
