<x-portal.headDashboard />
<style>
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #1a2035;
    }
</style>
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
