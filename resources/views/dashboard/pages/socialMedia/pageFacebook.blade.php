@extends('dashboard.layout.layoutdashboard')
{{-- @section('title', 'Home') --}}
@section('body')
    @php
        $projects = [
            [
                'name' => 'Project #2',
                'title' => 'Modern',
                'description' => null,
                'image' => '../portal/assets-pro/img/post.webp',
                'button' => 'View Pages ',
            ],
        ];
    @endphp

    <div style="margin:100px 0 0 0;">
        <h2 class="px-4">Facebook</h2>
        <a href="{{ route('facebook.redirect') }}">Connect to Facebook</a>
        <x-dashboard.comp.pagesProfile.sectionProfile6 :projects="$projects" title="Pages"
            description="Project descriptions go here" />


        <!-- Pagination -->
    </div>
    {{-- <nav aria-label="Page navigation example" class="flex justify-center my-6">
        <ul class="inline-flex -space-x-px text-base h-20">
            <li>
                <a href="#"
                    class="flex items-center justify-center py-2 px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Previous
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center py-2 px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 py-2 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page"
                    class="flex items-center justify-center px-4 h-10 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Next
                </a>
            </li>
        </ul>
    </nav> --}}
@endsection
