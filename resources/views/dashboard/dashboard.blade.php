@extends('dashboard.layout.layoutdashboard')
{{-- @section('title', 'Home') --}}
@section('body')
<div class="wrapper">
    <!-- Sidebar -->
    <x-dashboard.sidebar />
    <!-- End Sidebar -->

    <x-dashboard.mainPanel />

    <!-- Custom template | don't include it in your project! -->
    <x-dashboard.customTemplate />
    <!-- End Custom template -->
</div>

@endsection