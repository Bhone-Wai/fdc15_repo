@props(['color', 'text'])

<div>
    <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
        <label class="btn btn-{{ $color }} active">
            {{ $text }}
        </label>
        <label class="btn btn-{{ $color }}">
            {{ $text }}
        </label>
        <label class="btn btn-{{ $color }}">
            {{ $text }}
        </label>
    </div>
</div>