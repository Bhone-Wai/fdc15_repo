@extends('admin.layouts.app')

@section('style')
    <style>
        li {
            /* color: "navy", */
        }
    </style>
@endsection

@section('title', 'page1')
@section('header', 'page1')

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