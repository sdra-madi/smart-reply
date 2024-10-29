@props([
    'avatar' => null,
    'username' => null,
    'status' => null,
    'messageLink' => null,
    'banLink' => null,
])

<div class="item-list">
    <div class="avatar">
        <img src="{{ asset($avatar) }}" alt="Avatar of {{ $username }}" class="avatar-img rounded-circle" />
    </div>
    <div class="info-user ms-3">
        <div class="username">
            {{ $username }}
        </div>
        <div class="status">
            {{ $status }}
        </div>
    </div>
    <a href="{{ $messageLink }}" class="btn btn-icon btn-link op-8 me-1">
        <i class="far fa-envelope"></i>
    </a>
    <a href="{{ $banLink }}" class="btn btn-icon btn-link btn-danger op-8">
        <i class="fas fa-ban"></i>
    </a>
</div>
