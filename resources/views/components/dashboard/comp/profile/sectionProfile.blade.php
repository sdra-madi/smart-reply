@props([
    'username' => 'Hizrian',                   
    'email' => 'hello@example.com',      
    'avatar' => 'portal/assets-dash/img/profile.jpg',
])
<style>
    .user-box h4,
    .user-box p {
        color: white !important;
    }
</style>
<li class="nav-item topbar-user dropdown hidden-caret">
    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
        <div class="avatar-sm">
            <img src="{{ asset($avatar) }}" alt="..." class="avatar-img rounded-circle" />
        </div>
        <span class="profile-username text-white">
            <span class="op-7 text-white">Hi,</span>
            <span class="fw-bold text-white">{{ $username }}</span>
        </span>
    </a>
    <ul class="dropdown-menu dropdown-user animated fadeIn">
        <div class="dropdown-user-scroll scrollbar-outer">
            <li>
                <div class="user-box">
                    <div class="avatar-lg">
                        <img src="{{ asset($avatar) }}" alt="image profile" class="avatar-img rounded" />
                    </div>
                    <div class="u-text">
                        <h4>{{ $username }}</h4>
                        <p class="text-muted">{{ $email }}</p>
                        <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
        </div>
    </ul>
</li>
