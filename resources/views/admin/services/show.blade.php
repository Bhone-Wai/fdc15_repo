@extends('admin.layouts.app')

@section('style')
    <style>
        
    </style>
@endsection

@section('title', 'Service')
@section('header', 'Service')

<!-- Content -->
@section('content')
    <div class="mb-3">
        <a href="{{ route('services.index') }}" class="btn btn-sm btn-primary">
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
                <td scope="row">Type</td>
                <td>{{ $service->type }}</td>
            </tr>
            <tr>    
                <td scope="row">Name</td>
                <td>{{ $service->name }}</td>
            </tr>
            <tr>    
                <td scope="row">Description</td>
                <td>{{ $service->description }}</td>
            </tr>
            <tr>
                <td scope="row">Created by</td>
                <td>{{ $service->createdBy->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td scope="row">Updated by</td>
                <td>{{ $service->updatedBy->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td scope="row">Created at</td>
                <td>{{ $service->created_at }}</td>
            </tr>
            <tr>
                <td scope="row">Update at</td>
                <td>{{ $service->Update_at }}</td>
            </tr>
        </tbody>
    </table>
    
@endsection

<!-- Script -->
@section('script')
    
@endsection