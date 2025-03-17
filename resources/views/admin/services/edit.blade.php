@extends('admin.layouts.app')

@section('style')
    <style>
        img {
            width: 240px;
            height: 200px;
        }
    </style>
@endsection

@section('title', 'Edit service')
@section('header', 'Edit service')

<!-- Content -->
@section('content')
    <div class="mb-3">
        <a href="{{ route('services.index') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-chevron-left"></i>
            Back
        </a>
    </div>

    <form action="{{ route('services.update', ['service' => $service->id]) }}" method="post">
        @csrf()
        @method('put')
        <div class="mb-3">
            <label for="" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" value="{{ old('type', $service->type) }}">
            @error('type')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control border" name="name" " value="{{ old('name', $service->name) }}">
            @error('name')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="4" >{{ old('description', $service->description) }}</textarea>
            @error('description')
                <p class="text-danger mt-1">{{ $errors->first('description') }}</p>
            @enderror
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