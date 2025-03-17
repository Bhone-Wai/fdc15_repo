@extends('admin.layouts.app')

@section('style')
    <style>
        li {
            /* color: "navy", */
        }
    </style>
@endsection

@section('title', 'view only')
@section('header', 'view only')

<!-- Content -->
@section('content')
    <h3>This is content</h3>

    <h1>Get Session</h1>
    <p>Name : {{ session()->has('name') ? session()->get('name') : 'nothing' }}</p>
    <p>Age : {{ session()->has('age') ? session()->get('age') : 'nothing' }}</p>
    <p>Address : {{ session()->has('address') ? session()->get('address') : 'nothing' }}</p>
    <p>@lang('localization.english')</p>
@endsection

<!-- Script -->
@section('script')
    <script>
        console.log("Hello World")
    </script>
@endsection