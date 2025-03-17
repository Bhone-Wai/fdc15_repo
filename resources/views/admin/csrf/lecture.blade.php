@extends('admin.layouts.app')

@section('title', 'Lecture')

@section('header', 'Lecture')

@section('content')
    <h1>Lecture</h1>
    <form action="{{ route('getInfo') }}" method="post">
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
            <button class="btn btn-primary">Enter</button>
        </div>
    </form>
@endsection