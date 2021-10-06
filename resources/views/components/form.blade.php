@foreach ($formInputs as $formInput)
<div>
    <input id="{{ $formInput['name'] }}" type="{{ isset($formInput['type']) ? $formInput['type'] : 'text' }}"
        placeholder="{{ $formInput['label'] }}"
        class="appearance-none rounded-none text-sm relative block w-full p-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm {{ $loop->first ? 'rounded-t-md' : '' }} {{ $loop->last ? 'rounded-b-md' : '' }}"
        name="{{ $formInput['name'] }}" value="" autocomplete="{{ $formInput['name'] }}"
        autofocus>
</div>
@endforeach