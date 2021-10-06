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
            <a href="{{ route('educations.create') }}"
                        class="h-12 block py-3 px-5 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Nieuwe Opleiding') }}
                        </a>
            </header>
            <main class="mx-8">
                <div class="full-width my-8">
                    <div class="grid grid-cols-4 px-8 py-3 border-b border-gray-200">
                        <div></div>
                        <div>Naam</div>
                        <div>Start datum</div>
                        <div>Eind datum</div>
                    </div>

                    @foreach ($educations as $education)
                        <div class="grid grid-cols-4 px-8 py-3 border-b border-gray-200">
                            <div>{{ $i }}</div>
                            <div>{{ $education->name }}</div>
                            <div>{{ $education->date_start }}</div>
                            <div>{{ $education->date_end }}</div>
                        </div>
                    @endforeach
                </div>
                {!! $educations->links() !!}
            </main>
        </div>
    </div>

@endsection
