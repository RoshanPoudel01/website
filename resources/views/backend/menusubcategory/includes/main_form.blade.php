<div class="card-body">

    <div class="form-group row mb-3">
        {{ Form::label('menu_sub_category', 'Menu Sub Category *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::text('menu_sub_category', null, ['class' => 'form-control', 'id' => 'menu_sub_category', 'placeholder' => 'Menu Sub Category']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'menu_sub_category'])
        </div>
    </div> <div class="form-group row mb-3">
        {{ Form::label('menu_category_id', 'Menu Category *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::select('menu_category_id',$data['menu_category'], null, ['class' => 'form-control', 'id' => 'menu_category_id', 'placeholder' => 'Please Select Menu Category']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'menu_category_id'])
        </div>
    </div>
    <div class="form-group row mb-3">
        {{ Form::label('description', 'Page Description *', ['class' => 'col-3 col-form-label']) }}
        <div class="col-9">
            {{ Form::textarea('description', null, ['class' => 'ckeditor form-control', 'id' => 'description', 'placeholder' => 'Page Details']) }}
            @include('backend.includes.validation_error_message',['fieldname' => 'description'])
        </div>
    <div class="form-group row">
        <div class="col-3">
            {!! Form::label('status', 'Status',["class" => "radiostock"]) !!}
        </div>
        <div class="col-9">
            <label class="radio-inline">
            {!! Form::radio('status', 1, true) !!} Available </label>
            <label class="radio-inline">
            {!! Form::radio('status',0, false) !!} Not Available</label>
        </div>
    </div>
</div>

<div class="card-footer">
    {{ Form::button('Submit',['type' =>'submit','class' => 'btn btn-primary']) }}
</div>
