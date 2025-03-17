@extends('admin.layouts.app')

@section('title', 'Lecture')

@section('header', 'Lecture')

@section('content')
    <h1>Lecture</h1>
    <div class="mb-3">
        <button class="btn btn-primary" id="get-items">Enter</button>
    </div>
    <ul class="list-group text-center">
                 
    </ul>       
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(() => {
            $('#get-items').click(() => {
                $.ajax({
                    type: "post",
                    url: "/admin/csrf/get-items",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: (data) => {
                        let items = "";
                        data.forEach(item => {
                            items += `<li class="list-group-item">${item}</li>`
                        });
                        console.log(data)
                        $('.list-group').html(items);
                    },
                    error: (error) => {
                        console.log(error);
                    }
                })
            })
        })
    </script>
@endsection

