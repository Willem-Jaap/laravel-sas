@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50">
    <div class="max-w-md w-full space-y-8 mb-8">
        <div>
            <h2 class="mt-6 text-center text-4xl font-extrabold text-gray-900">Welkom bij Laravel LAS</h2>
            <p class="mt-2 text-center text-sm text-gray-600">Registreer hieronder in, of <a class="font-medium text-indigo-600 hover:text-indigo-500" href="{{route('login')}}">log in.</a></p>
        </div>

        <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="rounded-md shadow sm -space-y-px">
                <div>
                    @error('name')
                    <span class="block text-sm px-3 py-2 text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="email" class="sr-only">
                        {{ __('Name') }}
                    </label>

                    <input id="name" type="text" placeholder="{{ __('Name') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                <div>
                    @error('email')
                    <span class="block text-sm px-3 py-2 text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="email" class="sr-only">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input id="email" type="email" placeholder="{{__('E-Mail Address')}}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>

                <div>
                    <label for="password" class="sr-only">{{ __('Password') }}</label>


                    @error('password')
                    <span class="block text-sm px-3 py-2 text-red-600" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id="password" type="password" placeholder="{{ __('Password') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="password" required autocomplete="new-password">
                </div>

                <div>
                    <label for="password-confirm" class="sr-only">{{ __('Repeat Password') }}</label>

                    <input id="password-confirm" type="password" placeholder="{{ __('Repeat Password') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <!-- Heroicon name: solid/lock-closed -->
                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                {{ __('Register') }}
            </button>
        </form>
    </div>
</div>
@endsection