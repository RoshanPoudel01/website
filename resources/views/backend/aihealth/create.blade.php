@extends('backend.layouts.app',['panel' => 'AI in Health Changes','page' => 'Create'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">AI in Health Changes</h3>
                    <a class="btn btn-info btn-md float-right" href="{{ route('aihealth.index') }}">
                        <i class="fas fa-list"></i> List
                    </a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{ Form::open(['route' => 'aihealth', 'method' => 'post']) }}

                @include('backend.aihealth.includes.main_form')

                {{ Form::close() }}

            </div>
            <!-- /.card -->

        </div>

    </div>
@endsection
