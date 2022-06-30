<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('menu_category', 'Menu Category *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('menu_category', null, ['class' => 'form-control', 'id' => 'menu_category', 'placeholder' => 'Menu Category']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'menu_category'])
        </div>
    </div>

    <div class="form-group row mb-3">
        {{ Form::label('description', 'Page Description *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('description', null, ['class' => 'ckeditor form-control', 'id' => 'description', 'placeholder' => 'Page Details']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'description'])
        </div>
</div>

<div class="card-footer">
    {{ Form::button('Submit',['type' =>'submit','class' => 'btn btn-primary']) }}
</div>
