@extends('admin.layouts.app')

@section('title', 'component')

@section('header', 'component')

@section('content')
    <h1>Component With Static Data</h1>
    <p class="mb-3">@lang('localization.change')</p>

    <!-- Alert -->
    <x-alert color="danger" title="Internal Server Error" text="Unresolvable dependency resolving [Parameter #0 [ <required> $color ]] in class App\View\Components\Alert"></x-alert>
    <x-alert color="primary" title="Rendering Components" text="To display a component, you may use a Blade component tag within one of your Blade templates."></x-alert>
    <x-alert color="warning" title="Index Components" text="Sometimes components are part of a component group and you may wish to group the related components within a single directory."></x-alert>


    <h1>Assignment</h1>
    <!-- List Group -->
    <!-- @foreach($items as $item)
        <x-list-group :title="$item['title']" :description="$item['description']" :count="$item['count']"></x-list-group>
    @endforeach -->
    <!-- End of List Group -->
    

    <!-- Card -->
    <div class="d-flex gap-3">
        @foreach($cards as $card)
            <x-card :image="$card['image']" :text="$card['text']"></x-card>
        @endforeach
    </div>
    <!-- End of Card -->


    <!-- Button -->
    @foreach($buttons as $button)
        <x-button :color="$button['color']" :text="$button['text']"></x-button>
    @endforeach


    <h1>Component With Dynamic Data</h1>
    <!-- Alert -->
    @foreach($alerts as $alert)
        <x-alert :color="$alert['color']" :title="$alert['title']" :text="$alert['text']"></x-alert>
    @endforeach
     
@endsection