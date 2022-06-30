@extends('backend.layouts.app',['panel' => 'Activity','page' => 'Show'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <td>{{ $data['row']->activity_name }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{!! html_entity_decode($data['row']->description) !!}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $data['row']->status }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $data['row']->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $data['row']->updated_at }}</td>
                </tr>
            </table>
        </div>
        <!-- /.col -->
    </div>
@endsection
