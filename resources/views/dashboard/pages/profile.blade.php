@extends('dashboard.layout.layoutdashboard')
{{-- @section('title', 'Home') --}}
@section('body')
    <style>
        .div {
            margin-top: 100px;
        }
    </style>
    <div class="div">
        <div class="w-full px-6 mx-auto">
            <x-dashboard.comp.pagesProfile.sectionProfile1 />
            <div
                class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
                <x-dashboard.comp.pagesProfile.sectionProfile2 fullName="Alec M. Thompson" Email="alecthompson@mail.com" />
            </div>
        </div>
        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                @php
                    $accountSettings = [
                        ['id' => 'follow', 'label' => 'Email me when someone follows me', 'checked' => true],
                        ['id' => 'answer', 'label' => 'Email me when someone answers on my post', 'checked' => false],
                        ['id' => 'mention', 'label' => 'Email me when someone mentions me', 'checked' => true],
                    ];

                    $appSettings = [
                        ['id' => 'launches-projects', 'label' => 'New launches and projects', 'checked' => false],
                        ['id' => 'product-updates', 'label' => 'Monthly product updates', 'checked' => true],
                        ['id' => 'subscribe', 'label' => 'Subscribe to newsletter', 'checked' => false],
                    ];
                @endphp

                <x-dashboard.comp.pagesProfile.sectionProfile3 title="Platform Settings" accountLabel="Account"
                    appLabel="Application" :accountSettings="$accountSettings" :appSettings="$appSettings" />



                <x-dashboard.comp.pagesProfile.sectionProfile4 title="Profile Information"
                    bio="Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality)."
                    fullName="Alec M. Thompson" mobile="(44) 123 1234 123" email="alecthompson@mail.com" location="USA" />

                @php
                    $conversations = [
                        [
                            'icone' => 'fa-facebook-f',
                            'name' => 'facebook',
                        ],
                        [
                            'icone' => 'fa-instagram',
                            'name' => 'Instagram',
                        ],
                        [
                            'icone' => 'fa-whatsapp',
                            'name' => 'whatsapp',
                        ],
                    ];
                @endphp

                <x-dashboard.comp.pagesProfile.sectionProfile5 :conversations="$conversations" />
                {{-- @php
                    $projects = [
                        [
                            'name' => 'Project #2',
                            'title' => 'Modern',
                            'description' => 'As Uber works through a huge amount of internal management turmoil.',
                            'image' => '../portal/assets-pro/img/home-decor-1.jpg',
                        ],
                        [
                            'name' => 'Project #2',
                            'title' => 'Modern',
                            'description' => 'As Uber works through a huge amount of internal management turmoil.',
                            'image' => '../portal/assets-pro/img/home-decor-1.jpg',
                        ],
                        [
                            'name' => 'Project #2',
                            'title' => 'Modern',
                            'description' => 'As Uber works through a huge amount of internal management turmoil.',
                            'image' => '../portal/assets-pro/img/home-decor-1.jpg',
                        ],
                        [
                            'name' => 'Project #2',
                            'title' => 'Modern',
                            'description' => 'As Uber works through a huge amount of internal management turmoil.',
                            'image' => '../portal/assets-pro/img/home-decor-1.jpg',
                        ],
                    ];
                @endphp

                <x-dashboard.comp.pagesProfile.sectionProfile6 :projects="$projects" /> --}}
            </div>
        </div>
    </div>
@endsection
