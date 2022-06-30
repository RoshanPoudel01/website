<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('activity_name', 'Activity Name *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('activity_name', null, ['class' => 'form-control', 'id' => 'activity_name', 'placeholder' => 'Activity Name']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'activity_name'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('description', 'Description *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('description', null, ['class' => 'ckeditor form-control', 'id' => 'description', 'placeholder' => 'description']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'description'])
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3">
            {!! Form::label('status', 'Status',["class" => "radiostatus"]) !!}
        </div>
        <div class="col-6">
            <label class="radio-inline">
            {!! Form::radio('status', 1, true) !!} Active </label>
            <label class="radio-inline">
            {!! Form::radio('status',0, false) !!} De-Active </label>

        </div>
        <div class="col-3">
            <div class="form-check">

               {!! Form::checkbox('news', 1, false, ['class' => 'form-check-input']) !!}
                <label class="form-check-label">
                  <strong>News</strong>
                </label>
              </div>

        </div>
    </div>
</div>

<div class="card-footer">
    {{ Form::button('Submit',['type' =>'submit','class' => 'btn btn-primary']) }}
</div>
