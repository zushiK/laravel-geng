@props(['disabled' => false, 'name', 'type' => 'text'])


<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
    {{ $slot }} </label>
<div class="mt-1 flex rounded-md shadow-sm">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge([
            'class' => 'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300',
        ]) }}>
</div>
