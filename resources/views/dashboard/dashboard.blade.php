@extends('dashboard.layout.layoutdashboard')
{{-- @section('title', 'Home') --}}
@section('body')
    <x-dashboard.pages.contentHome />
@endsection
@props([
    'fullName' => 'Wesam Shaker',
])
@push('end_js')
    <script>
        // Notify
        $.notify({
            icon: "icon-bell",
            title: "{{ $fullName }}",
            message: `Welcome. {{ $fullName }}`,
        }, {
            type: "secondary",
            placement: {
                from: "bottom",
                align: "right",
            },
            time: 1000,
        });
    </script>
@endpush
