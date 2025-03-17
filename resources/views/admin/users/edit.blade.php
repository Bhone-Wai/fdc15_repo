@extends('admin.layouts.app')

@section('style')
    <style>
        
    </style>
@endsection

@section('title', 'Edit user')
@section('header', 'Edit user')

<!-- Content -->
@section('content')
    <div class="mb-3">
        <a href="{{ url('admin/users') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-chevron-left"></i>
            Back
        </a>
    </div>

    <form action="{{ url('/admin/users/' . $data->id ) }}" method="post">
        @csrf()
        @method('put')
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control border" name="name" value="{{ old('name', $data->name) }}">
            @if($errors->has('name'))
                <p class="text-danger mt-1">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control border" name="email" value="{{ old('email', $data->email) }}">
            @if($errors->has('email'))
                <p class="text-danger mt-1">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100">Edit</button>
        </div>
    </form>
@endsection

<!-- Script -->
@section('script')
    <script>
        $(document).ready(() => {
            $('[name="name"]').focus();
        })
    </script>
@endsection