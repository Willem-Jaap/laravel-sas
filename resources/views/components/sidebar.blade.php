<?php

$routes = [
    [
        'route' => 'home',
        'url'   => 'home',
        'label' => 'Home'
    ],
    [
        'route' => 'students.index',
        'url'   => 'students',
        'label' => 'Studenten'
    ],
    [
        'route' => 'lessons.index',
        'url'   => 'lessons',
        'label' => 'Vakken'
    ],
    [
        'route' => 'educations.index',
        'url' => 'educations',
        'label' => 'Opleidingen'
    ],
]
?>

<div class="flex flex-col w-80 px-8 py-7 border-r border-gray-200 shadow">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="23.409" viewBox="0 0 34 23.409">
            <g id="Group_40" data-name="Group 40" transform="translate(-12.28 -32.476)">
                <g id="Group_38" data-name="Group 38" transform="translate(-4.317 22.081)">
                    <path id="Path_18" data-name="Path 18" d="M-1.039,142.253H6.332l3.963,23.409H2.922Z" transform="translate(28.969 -131.858)" fill="#111827" />
                    <path id="Path_20" data-name="Path 20" d="M-1.039,142.253H6.332l3.963,23.409H2.922Z" transform="translate(17.635 -131.858)" fill="#4f46e5" />
                    <path id="Path_19" data-name="Path 19" d="M-1.039,142.253H6.332l3.963,23.409H2.922Z" transform="translate(40.302 -131.858)" fill="#111827" />
                </g>
            </g>
        </svg>
        <h1 class="text-3xl ml-4 font-extrabold text-gray-900">Laravel LAS</h1>
    </div>
    @auth
    <nav class="my-8 flex-1">
        <ul class="-mx-8">
            @foreach($routes as $route)
            <li><a class="block px-8 py-3 border-r-4 border-gray-200 hover:border-indigo-300 {{ (request()->is($route['url'] . '*')) ? 'border-indigo-600 hover:border-indigo-600' : '' }}" href="{{ route($route['route']) }} ">{{ $route['label'] }}</a></li>
            @endforeach
        </ul>
    </nav>
    <h1> Welkom {{ Auth::user()->name }}</h1>
    @endauth
</div>