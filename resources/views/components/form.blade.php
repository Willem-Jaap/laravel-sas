@foreach ($formInputs as $formInput)
<div>
    @if (isset($formInput['type']) && isset($formInput['options']) && $formInput['type'] === 'select')
    {{-- @dump($formInput) --}}
    {{-- @dump($educations) --}}
    {{-- <select name="{{ $formInput['name'] }}" id="{{ $formInput['name'] }}" class="appearance-none rounded-none text-sm relative block w-full p-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
    focus:z-10 sm:text-sm"> --}}
        {{-- @dump($formInput['options']) --}}
        @foreach (${$formInput['options']} as $option)
        <h1>Lorems</h1>
        @dump($option->first_name)
        {{-- {{$option->$formInput['key']}} --}}
        {{-- @dump($option) --}}
        {{-- <option value=""></option> --}}
        {{-- <option value="{{ $option->{$formInput['key']}}}">{{ $option->{$formInput['value']} }}</option> --}}
        @endforeach
        {{--
    </select> --}}
    @else
    <input id="{{ $formInput['name'] }}" type="{{ isset($formInput['type']) ? $formInput['type'] : 'text' }}" placeholder="{{ $formInput['label'] }}"
        class="appearance-none rounded-none text-sm relative block w-full p-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm {{ $loop->first ? 'rounded-t-md' : '' }} {{ $loop->last ? 'rounded-b-md' : '' }}"
        name="{{ $formInput['name'] }}" value="" autocomplete="{{ $formInput['name'] }}" autofocus>
    @endif
</div>
@endforeach