@props(['disabled' => false, 'name' => ''])

<input {{ $disabled ? 'disabled' : '' }}
    {{ $attributes->merge([
        'class' => 'rounded-md shadow-sm border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
    ]) }}
    name="{{ $name }}">
