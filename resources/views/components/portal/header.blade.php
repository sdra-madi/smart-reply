<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            {{-- <img src="assets/img/logo.png" alt="" /> --}}
            <h1 class="sitename">Wesam Code</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="active">{{ __('core.home') }}<br /></a>
                </li>

                <li><a href="{{ route('home') }}#about">{{ __('core.about') }}</a></li>
                <li><a href="{{ route('home') }}#services">{{ __('core.services') }}</a></li>
                <li><a href="{{ route('home') }}#pricing ">{{ __('core.pricing') }}</a></li>
                <li><a href="{{ route('team') }}">{{ __('core.team') }}</a></li>
                <li><a href="{{ route('home') }}#contact">{{ __('core.contact') }}</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted flex-md-shrink-0" href="{{ route('create') }}">{{ __('core.login') }}</a>
    </div>
</header>
