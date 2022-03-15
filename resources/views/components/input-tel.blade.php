@props(['disabled' => false, 'name01', 'name02', 'name03', 'value01', 'value02', 'value03', 'type' => 'text', 'required' => false])


<label for="" class="block text-sm font-medium text-gray-700">
    {{ $slot }}
    @if ($required)
        <span class="ml-1 text-xs text-red-500">必須</span>
    @endif
</label>
<div class="mt-1 flex">
    <input type="{{ $type }}" name="{{ $name01 }}" value="{{ $value01 }}" id="{{ $name01 }}"
        {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
        {{ $attributes->merge([
            'class' => 'w-24 focus:ring-indigo-500 focus:border-indigo-500 block rounded sm:text-sm border-gray-300',
        ]) }}
        maxlength="4">
    <span class="inline-block align-middle px-3">-</span>
    <input type="{{ $type }}" name="{{ $name02 }}" value="{{ $value02 }}" id="{{ $name02 }}"
        {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
        {{ $attributes->merge([
            'class' => 'w-24 focus:ring-indigo-500 focus:border-indigo-500 block rounded sm:text-sm border-gray-300',
        ]) }}
        maxlength="3">
    <span class="inline-block align-middle px-3">-</span>
    <input type="{{ $type }}" name="{{ $name03 }}" value="{{ $value03 }}"
        id="{{ $name03 }}" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
        {{ $attributes->merge([
            'class' => 'w-24 focus:ring-indigo-500 focus:border-indigo-500 block rounded sm:text-sm border-gray-300',
        ]) }}
        maxlength="3">
</div>
