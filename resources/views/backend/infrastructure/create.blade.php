@extends('backend.layouts.app',['panel' => 'Menu Category','page' => 'Create'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">Menu Categories</h3>
                    <a class="btn btn-info btn-md float-right" href="{{ route('infrastructure.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'infrastructure', 'method' => 'post']) }}

                @include('backend.infrastructure.includes.main_form')

                {{ Form::close() }}

            </div>
            <!-- /.card -->

        </div>

    </div>
@endsection
