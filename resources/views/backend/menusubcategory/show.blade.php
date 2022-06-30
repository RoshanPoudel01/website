@extends('backend.layouts.app',['panel' => 'Menu Sub Category','page' => 'Show'])

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>Menu Category</th>
                    <td>{{ $data['row']->category->menu_category }}</td>
                </tr>
                <tr>
                    <th>Menu Sub Category</th>
                    <td>{{ $data['row']->menu_sub_category }}</td>
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
