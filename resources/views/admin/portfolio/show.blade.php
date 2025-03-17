@extends('admin.layouts.app')

@section('style')
    <style>
        
    </style>
@endsection

@section('title', 'Portfolio')
@section('header', 'Portfolio')

<!-- Content -->
@section('content')
    <div class="mb-3">
        <a href="{{ route('portfolios.index') }}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-chevron-left"></i>
            Back
        </a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Image</td>
                <td>
                    <img src="{{ asset('/storage/' . $portfolio->image) }}" style="width: 240px; height: 200px">
                </td>
            </tr>
            <tr>    
                <td scope="row">Title</td>
                <td>{{ $portfolio->title }}</td>
            </tr>
            <tr>    
                <td scope="row">Description</td>
                <td>{{ $portfolio->description }}</td>
            </tr>
            <tr>
                <td scope="row">Created by</td>
                <td>{{ $portfolio->createdBy->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td scope="row">Updated by</td>
                <td>{{ $portfolio->updatedBy->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td scope="row">Created at</td>
                <td>{{ $portfolio->created_at }}</td>
            </tr>
            <tr>
                <td scope="row">Update at</td>
                <td>{{ $portfolio->Update_at }}</td>
            </tr>
        </tbody>
    </table>
    
@endsection

<!-- Script -->
@section('script')
    
@endsection