@extends('admin.layouts.app')

@section('style')
    <style>
        table img {
            width: 46px;
            height: 46px;
        }
    </style>
@endsection

@section('title', 'Contact list')
@section('header', 'Contact list')

<!-- Content -->
@section('content')
<div class="container mt-3">
    <div class="row">
        @foreach($contacts as $contact)
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $contact->name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
                    <p class="card-text">{{ $contact->message }}</p>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between ">
                    <p class="m-0">{{ $contact->created_at->format('M d, Y') }}</p>
                    <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" method="post">
                        @csrf()
                        @method('delete')
                        <button type="button" class="border-0 delete-btn" style="background-color: transparent;">
                            <i class="fa-solid fa-trash text-danger"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<!-- Script -->
@section('script')
    <script>
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