@extends('backend.layouts.app',['panel' => 'Menu Sub Category','page' => 'Create'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">Menu Sub Category</h3>
                    <a class="btn btn-info btn-md float-right" href="{{ route('menusubcategory.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                </div>
                <!-- /.menusubcategoryd-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'menusubcategory', 'method' => 'post','enctype'=>'multipart/form-data']) }}

                @include('backend.menusubcategory.includes.main_form')

                {{ Form::close() }}

            </div>
            <!-- /.card -->

        </div>

    </div>
@endsection



