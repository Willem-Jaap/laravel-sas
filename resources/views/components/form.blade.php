@foreach ($formInputs as $key => $formInput)
    @if (gettype($key) === 'integer')
    <div>
        @if (isset($formInput['type']) && isset($formInput['options']) && $formInput['type'] === 'select')
        <select name="{{ $formInput['name'] }}" id="{{ $formInput['name'] }}" class="appearance-none rounded-none text-sm relative block w-full p-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500
        focus:z-10 sm:text-sm  {{ $loop->first ? 'rounded-t-md' : '' }} {{ $loop->last ? 'rounded-b-md' : '' }}">
            @foreach (${$formInput['options']} as $option)
            <option value="{{ $option->{$formInput['key']} }}" {{ $formInputs['method'] == 'update' ? $option->{$formInput['key']} == ${$formInputs['model']}->{$formInput['name']} ? 'selected="selected"' : false : false }}">{{ $option->{$formInput['value']} }}</option>
            @endforeach
            
        </select>
        @else
        <input id="{{ $formInput['name'] }}" type="{{ isset($formInput['type']) ? $formInput['type'] : 'text' }}" placeholder="{{ $formInput['label'] }}"
            class="appearance-none rounded-none text-sm relative block w-full p-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm {{ $loop->first ? 'rounded-t-md' : '' }} {{ $loop->last ? 'rounded-b-md' : '' }}"
            name="{{ $formInput['name'] }}" value="{{ $formInputs['method'] == 'update' ? ${$formInputs['model']}->{$formInput['name']} : '' }}" autocomplete="{{ $formInput['name'] }}" autofocus>
        @endif
    </div>
    @endif
@endforeach