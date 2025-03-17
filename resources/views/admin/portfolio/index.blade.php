@extends('admin.layouts.app')

@section('style')
    <style>
        table img {
            width: 46px;
            height: 46px;
        }
    </style>
@endsection

@section('title', 'Portfolio')
@section('header', 'Portfolio')

<!-- Content -->
@section('content')
    
    <a href="{{ route('portfolios.create') }}" class="btn btn-sm btn-primary">
        <i class="fa-solid fa-plus"></i>    
        Create
    </a>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created_by</th>
                <th>Updated_by</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolios as $portfolio)
            <tr>
                <td class="d-flex gap-2" style="padding: 18px;">
                    <a href="{{ route('portfolios.show', ['portfolio' => $portfolio->id]) }}" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-list"></i>
                    </a>
                    <a href="{{ route('portfolios.edit', ['portfolio' => $portfolio->id]) }}" class="btn btn-sm btn-secondary">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                    <form action="{{ route('portfolios.destroy', ['portfolio' => $portfolio->id]) }}" method="post" class="delete-form">
                        @csrf()
                        @method('delete')
                        <button type="button" class="btn btn-sm btn-danger delete-btn">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
                <td>
                    <img src="{{ asset('/storage/' . $portfolio->image) }}">
                </td>
                <td>{{ $portfolio->title }}</td>
                <td>{{ $portfolio->description }}</td>
                <td>{{ $portfolio->createdBy->name ?? 'N/A' }}</td>
                <td>{{ $portfolio->updatedBy->name ?? 'N/A' }}</td>
                <td>{{ $portfolio->created_at }}</td>
                <td>{{ $portfolio->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

<!-- Script -->
@section('script')
    <script>
        new DataTable('#example');

        const message = "{{ session()->has('message') ? session()->get('message') : null }}";

        if(message) {
            Swal.fire({
                position: "center-center",
                icon: "success",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }

        $(document).ready(() => {
            $('.delete-btn').click(e => {
                let deleteButton = $(e.currentTarget);
                let form = deleteButton.parent();

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            })
        })
    </script>
@endsection