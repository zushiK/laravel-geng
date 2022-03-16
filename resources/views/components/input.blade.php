@props(['disabled' => false, 'name', 'type' => 'text', 'required' => false, 'attention', 'unit' => null])


<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
    {{ $slot }}
    @if ($required)
        <span class="ml-1 text-xs text-red-500">必須</span>
    @endif
</label>
<div class="mt-1 flex">
    @if ($unit)
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
            {{ $attributes->merge([
                'class' =>
                    'focus:ring-indigo-500 focus:border-indigo-500 flex-1 min-w-0 w-full block w-full sm:text-sm border-gray-300 rounded-l p-2 z-10',
            ]) }}>
        <span
            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-r border border-l-0 border-gray-300">
            {{ $unit }}
        </span>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
            {{ $attributes->merge([
                'class' => 'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300',
            ]) }}>
    @endif
</div>
@if (isset($attention))
    <span class="mt-2 text-sm text-red-500">{{ $attention }}</span>
@endif
