@props([
    'items' => [],
])

<div class="dropdown">
    <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-h"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($items as $item)
            <a class="dropdown-item" href="{{ $item['link'] }}">{{ $item['label'] }}</a>
        @endforeach
    </div>
</div>
