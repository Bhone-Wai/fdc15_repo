@extends('admin.layouts.app')

@section('style')
    <style>
        li {
            /* color: "navy", */
        }
    </style>
@endsection

@section('title', 'User')
@section('header', 'User')

<!-- Content -->
@section('content')
    
    <a href="{{ url('/admin/users/create') }}" class="btn btn-sm btn-primary">
        <i class="fa-solid fa-plus"></i>    
        Create
    </a>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Actions</th>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="d-flex gap-2">
                    <a href="/admin/users/{{ $user->id }}" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-list"></i>
                    </a>
                    <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-sm btn-secondary">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" class="delete-form">
                        @csrf()
                        @method('delete')
                        <button type="button" class="btn btn-sm btn-danger delete-btn">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                
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