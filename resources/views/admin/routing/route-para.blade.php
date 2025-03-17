@extends('admin.layouts.app')

@section('style')
    <style>
        li {
            /* color: "navy", */
        }
    </style>
@endsection

@section('title', 'route para')
@section('header', 'route para')

<!-- Content -->
@section('content')
    <p>Background color is {{ $bgColor }}</p>
    <p>Background color is {{ $color }}</p>

    <hr>

    <form action="{{ url('admin/routing/dynamic-route-para') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="">Background Color</label>
            <input type="text" class="form-control" name="bgColor" required>
        </div>
        <div class="mb-3">
            <label class="">Color</label>
            <input type="text" class="form-control" name="color" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

<!-- Script -->
@section('script')
    <script>
        console.log("Hello World")
    </script>
@endsection