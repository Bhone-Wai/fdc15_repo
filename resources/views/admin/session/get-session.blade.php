@extends('admin.layouts.app')

@section('title', 'Get Session')

@section('header', 'Get Session')

@section('content')
    <h1>Get Session</h1>
    <p>@lang('localization.name') : {{ session()->has('name') ? session()->get('name') : 'nothing' }}</p>
    <p>@lang('localization.age') : {{ session()->has('age') ? session()->get('age') : 'nothing' }}</p>
    <p>@lang('localization.address') : {{ session()->has('address') ? session()->get('address') : 'nothing' }}</p>

    <div class="d-flex justify-content-center align-items-center gap-2">
        <form action="{{ url('admin/session/delete-session/name') }}" method="post">
            @csrf()
            <button class="btn btn-danger">Delete Name</button>
        </form>
        <form action="{{ url('admin/session/delete-session/age') }}" method="post">
            @csrf()
            <button class="btn btn-danger">Delete Age</button>
        </form>
        <form action="{{ url('admin/session/delete-session/address') }}" method="post">
            @csrf()
            <button class="btn btn-danger">Delete Address</button>
        </form>
        <form action="{{ route('admin.flushSession') }}" method="post">
            @csrf()
            <button class="btn btn-danger">Delete All</button>
        </form>
    </div>

    <form action="{{ route('admin.postSession') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="">Age</label>
            <input type="number" class="form-control" name="age" required>
        </div>
        <div class="mb-3">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Enter</button>
        </div>
    </form>
@endsection