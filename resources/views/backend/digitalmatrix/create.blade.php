@extends('backend.layouts.app',['panel' => 'Digital Matrix','page' => 'Create'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">Digital Matrix</h3>
                    <a class="btn btn-info btn-md float-right" href="{{ route('digitalmatrix.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'digitalmatrix', 'method' => 'post']) }}

                @include('backend.digitalmatrix.includes.main_form')

                {{ Form::close() }}

            </div>
            <!-- /.card -->

        </div>

    </div>
@endsection
