@extends('admin.layouts.app')

@section('style')
    <style>
        img {
            width: 240px;
            height: 200px;
        }
    </style>
@endsection

@section('title', 'Edit portfolio')
@section('header', 'Edit portfolio')

<!-- Content -->
@section('content')
    <div class="mb-3">
        <a href="{{ route('portfolios.index') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-chevron-left"></i>
            Back
        </a>
    </div>

    <form action="{{ route('portfolios.update', ['portfolio' => $portfolio->id]) }}" method="post" enctype= multipart/form-data>
        @csrf()
        @method('put')
        <div class="mb-3">
            <img src="{{ asset('storage/' . $portfolio->image) }}" alt="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
            @error('image')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control border" name="title" value="{{ old('title', $portfolio->title) }}">
            @error('title')
                <p class="text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="" class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="4">{{ old('description', $portfolio->description) }}</textarea>
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