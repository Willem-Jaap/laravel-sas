@extends('layouts.app')

@section('content')
<div class="flex">
    @include('components.sidebar')
    <div class="min-h-screen flex-1">
        <header class="flex justify-end width-full items-center h-24 w-full px-8 py-4 border-gray-200 shadow">
        </header>
        <main class="flex justify-center bg-gray-50 px-8 py-7">
            <div class="max-w-md w-full">
                <h2 class="text-2xl ml-3 font-extrabold text-gray-900">Maak een nieuwe student aan</h2>

                <form class="space-y-6" method="POST" action="{{ route('students.index') }}">
                    @csrf
                    <div class="rounded-md shadow sm -space-y-px">
                        @foreach($formInputs as $formInput)
                        <div>
                            <input id="{{ $formInput['name'] }}" type="text" placeholder="{{$formInput['label']}}" class="appearance-none rounded-none text-sm relative block w-full p-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm {{ $loop->first ? 'rounded-t-md' : ''}} {{$loop->last ? 'rounded-b-md' : ''}}" name="email" value="" required autocomplete="{{$formInput['name']}}" autofocus>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="flex justify-center py-3 px-6 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Student aanmaken') }}
                    </button>
                </form>
            </div>

        </main>
    </div>
</div>

@endsection