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
            <a href="{{ route('students.create')}}"
                class="h-12 block py-3 px-5 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Nieuwe Student') }}
            </a>
        </header>
        <main class=" bg-gray-50">
            <table>
                <tr>
                    <th>Naam</th>
                    <th>Woonplaats</th>
                </tr>

                @foreach ($students as $student)
                <tr>
                    <td>{{$student->first_name}}{{$student->last_name ? ' ' . $student->insertion : ''}} {{$student->last_name}}</td>
                    <td>{{$student->street}} {{$student->number}}{{$student->number_addition ? ' ' . $student->number_addition : ''}} {{$student->postal_code}} {{$student->city}}</td>
                </tr>
                @endforeach
            </table>
            {!! $students->links() !!}
        </main>
    </div>
</div>

@endsection