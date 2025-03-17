@extends('admin.layouts.app')

@section('title', 'localization')

@section('header', 'localization')

@section('content')
    <h1>localization</h1>

    <form action="{{ route('admin.changeLocalization') }}" method="post">
        @csrf
        <div class="mb-3">
            <lable class="form-label">@lang('localization.change-localization')</lable>
            <select class="form-select" name="lang">
                <option value="en">@lang('localization.english')</option>
                <option value="mm">@lang('localization.myanmar')</option>
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">@lang('localization.change')</button>
        </div>
    </form>
    
@endsection