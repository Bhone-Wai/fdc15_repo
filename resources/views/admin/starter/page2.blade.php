@extends('admin.layouts.app')

@section('style')
    <style>
        li {
            /* color: "navy", */
        }
    </style>
@endsection

@section('title', 'page2')
@section('header', 'page2')

<!-- Content -->
@section('content')
    <h3>This is content</h3>
@endsection

<!-- Script -->
@section('script')
    <script>
        console.log("Hello World")
    </script>
@endsection