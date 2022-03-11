@props(['disabled' => false, 'name', 'type' => 'textarea', 'required' => false, 'rows' => 8, 'attention'])


<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
    {{ $slot }}
    @if ($required)
        <span class="mt-2 text-sm text-red-500">必須</span>
    @endif
</label>
<div class="mt-1 flex rounded-md shadow-sm">
    <textarea type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}"
        {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
        {{ $attributes->merge([
            'class' => 'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300',
        ]) }}>
    </textarea>
</div>
@if (isset($attention))
    <span class="mt-2 text-sm text-red-500">{{ $attention }}</span>
@endif
