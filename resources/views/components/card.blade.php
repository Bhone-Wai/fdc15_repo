@props(['image', 'text'])

<div>
    <div class="card mb-3" style="width: 18rem;">
        <img class="card-img-top" src="{{ $image }}" alt="Card image cap" style="width: 100%; height: 18rem; object-fit: cover">
        <div class="card-body">
            <p>{{ $text }}</p>
        </div>
    </div>
</div>