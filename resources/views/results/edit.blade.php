@extends('layouts.app')

@section('content')
<div class="flex">
    @include('components.sidebar')
    <div class="min-h-screen flex-1">
        <header class="flex justify-end width-full items-center h-24 w-full px-8 py-4 border-gray-200 shadow">
        </header>
        <main class="flex justify-center bg-gray-50 px-8 py-7">
            <div class="max-w-md w-full">
                <h2 class="text-2xl ml-3 font-extrabold text-gray-900">Update result.</h2>

                <form class="space-y-6" method="POST" action="{{ route('results.update', $result->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="rounded-md shadow sm -space-y-px">
                        @include('components.form')
                    </div>
                    <button type="submit"
                        class="flex justify-center py-3 px-6 border border-transp\arent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Resultaat updaten') }}
                    </button>
                </form>
            </div>

        </main>
    </div>
</div>

@endsection