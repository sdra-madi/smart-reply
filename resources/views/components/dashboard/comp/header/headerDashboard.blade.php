    <div class="main-header">
        <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="index.html" class="logo">
                    <img src="{{ asset('portal/assets-dash/img/profile.jpg') }}" class="navbar-brand" height="20" />
                </a>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="gg-menu-right"></i>
                    </button>
                    <button class="btn btn-toggle sidenav-toggler">
                        <i class="gg-menu-left"></i>
                    </button>
                </div>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
            <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                    {{-- <x-dashboard.comp.serch.serch /> --}}
                </nav>
                <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                    <x-dashboard.comp.messages.sectionMessages />
                    <x-dashboard.comp.notification.sectionNotification />
                    <x-dashboard.comp.profile.sectionProfile />
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
