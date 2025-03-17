@extends('admin.layouts.app')

@section('style')
    <style>
        
    </style>
@endsection

@section('title', 'Detail')
@section('header', 'Detail')

<!-- Content -->
@section('content')
    <div class="mb-3">
        <a href="{{ url('admin/users') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-chevron-left"></i>
            Back
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Name</td>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>    
                <td scope="row">Email</td>
                <td>{{ $data->email }}</td>
            </tr>
            <tr>
                <td scope="row">Created at</td>
                <td>{{ $data->created_at }}</td>
            </tr>
            <tr>
                <td scope="row">Updated at</td>
                <td>{{ $data->updated_at }}</td>
            </tr>
        </tbody>
    </table>

@endsection

<!-- Script -->
@section('script')
    <script>
        $(document).ready(() => {
            $('[name="name"]').focus();
        })
    </script>
@endsection