@props([
    'logoPath' => asset('portal/assets-dash/img/kaiadmin/logo_light.svg'),
])
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('portal/assets-dash/img/kaiadmin/logo_light.png') }}" style="height:20; width: 80%;" />
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
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item" data-id="dashboard">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Pages</h4>
                </li>
                <li class="nav-item" data-id="profile">
                    <a href="{{ route('profile') }}">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Social Media</h4>
                </li>
                <li class="nav-item" data-id="facebook">
                    <a href="{{ route('Facebook') }}">
                        <i class="fa-brands fa-facebook-f"></i>
                        <p>Facebook</p>
                    </a>
                </li>
                <li class="nav-item" data-id="instagram">
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                        <p>instagram</p>
                    </a>
                </li>
                <li class="nav-item" data-id="whatsapp">
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                        <p>Whatsapp</p>
                    </a>
                </li>
            </ul>


        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // استرجاع العنصر النشط من localStorage
        const activeItem = localStorage.getItem('activeNavItem');

        // إذا كان هناك عنصر نشط مخزن، أضف كلاس active إليه
        if (activeItem) {
            const activeNavItem = document.querySelector(`.nav-item[data-id="${activeItem}"]`);
            if (activeNavItem) {
                activeNavItem.classList.add('active');
            }
        }

        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function() {
                // إزالة كلاس active من جميع العناصر
                document.querySelectorAll('.nav-item').forEach(nav => nav.classList.remove(
                    'active'));

                // إضافة كلاس active إلى العنصر الذي تم النقر عليه
                item.classList.add('active');

                // تخزين معرف العنصر النشط في localStorage
                localStorage.setItem('activeNavItem', item.getAttribute('data-id'));
            });
        });
    });
    /////////////////////////////////////////////////////////////////////////////////
</script>
