<x-portal.headDashboard />
<div class="wrapper">
    <!-- Sidebar -->
    <x-dashboard.sidebar />
    <!-- End Sidebar -->
    <div class="main-panel">
        <x-dashboard.comp.header.headerdashboard />
        @yield('body')
        <x-portal.footerDashboard />
        <x-dashboard.customTemplate />
    </div>

</div>
<x-portal.srcDashboard />
