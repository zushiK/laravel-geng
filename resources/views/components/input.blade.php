@props(['disabled' => false, 'name', 'type' => 'text', 'required' => false, 'attention'])


<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
    {{ $slot }}
    @if ($required)
        <span class="ml-1 text-xs text-red-500">必須</span>
    @endif
</label>
<div class="mt-1 flex rounded-md shadow-sm">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
        {{ $attributes->merge([
            'class' => 'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300',
        ]) }}>
</div>
@if (isset($attention))
    <span class="mt-2 text-sm text-red-500">{{ $attention }}</span>
@endif
