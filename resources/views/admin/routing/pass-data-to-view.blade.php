@extends('admin.layouts.app')

@section('style')
    <style>
        li {
            /* color: "navy", */
        }
    </style>
@endsection

@section('title', 'pass data to view')
@section('header', 'pass data to view')

<!-- Content -->
@section('content')

    @foreach($btns as $btn)
        <button class="btn btn-{{ $btn['type'] }}">
            {{ $btn['text'] }}
        </button>
    @endforeach

@endsection

<!-- Script -->
@section('script')
    <script>
        console.log("Hello World")
    </script>
@endsection