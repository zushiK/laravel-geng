@props(['disabled' => false, 'name', 'type' => 'datetime-local', 'value', 'extra'])
@php
$datetime = '';
if (isset($value)) {
    $datetime = date('Y-m-d\TH:i', strtotime(old($name, $value ?? '')));
}
@endphp

<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
    {{ $slot }}
    @if ($extra ?? '')
        <span class="mt-2 text-sm text-red-500">必須</span>
    @endif
</label>
<div class="mt-1 flex rounded-md shadow-sm">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $datetime }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge([
            'class' => 'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300',
        ]) }}>
</div>
