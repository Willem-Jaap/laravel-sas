@extends('layouts.app')

@section('content')

<div class="flex">
    @include('components.sidebar')
    <div class="min-h-screen flex-1">
        <header class="flex justify-end width-full items-center h-24 w-full px-8 py-4 border-gray-200 shadow">
            @if ($message = Session::get('success'))
            <div class="">
                <p>{{ $message }}</p>
            </div>
            @endif
            <a href="{{ route('lessons.create') }}"
                class="h-12 block py-3 px-5 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Nieuwe Les') }}
            </a>
        </header>
        <main class="mx-8">
            <div class="full-width my-8">
                <div class="grid grid-cols-4 px-8 py-3 border-b border-gray-200">
                    <div></div>
                    <div>Naam</div>
                </div>

                @foreach ($lessons as $lesson)
                <div class="grid grid-cols-4 px-8 py-3 border-b border-gray-200">
                    <div>{{ $lesson->id }}</div>
                    <div>{{ $lesson->lesson_name }}</div>
                </div>
                @endforeach
            </div>
            {!! $lessons->links() !!}
        </main>
    </div>
</div>

@endsection