@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50">
    @guest
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Welkom bij Laravel LAS</h2>
            <p class="mt-2 text-center text-sm text-gray-600">Log hieronder in, of <a class="font-medium text-indigo-600 hover:text-indigo-500" href="{{route('register')}}">maak een account aan.</a></p>
        </div>
    </div>
    @endguest
    @auth
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Welkom {{ Auth::user()->name }}</h2>
            <p class="mt-2 text-center text-sm text-gray-600">Email: {{ Auth::user()->email }}</p>
        </div>
    </div>
    @endauth
</div>
@endsection