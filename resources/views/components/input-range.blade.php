@props(['disabled' => false, 'name01', 'name02', 'value01', 'value02', 'type' => 'text', 'required' => false, 'attention', 'unit' => null, 'maxlength' => null])


<label for="" class="block text-sm font-medium text-gray-700">
    {{ $slot }}
    @if ($required)
        <span class="ml-1 text-xs text-red-500">必須</span>
    @endif
</label>

<div class="mt-1 flex">
    <div class="flex-col basis-1/3">
        <div class="flex">
            <input type="{{ $type }}" name="{{ $name01 }}" id="{{ $name01 }}"
                value="{{ $value01 }}" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
                {{ $attributes->merge([
                    'class' =>
                        'focus:ring-indigo-500 focus:border-indigo-500 min-w-0 w-full block w-full sm:text-sm border-gray-300 rounded-l p-2 z-10',
                ]) }}
                maxlength={{ $maxlength }}>
            @if ($unit)
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-r border border-l-0 border-gray-300">{{ $unit }}</span>
            @endif
        </div>
        <div>
            <p class="mt-2 text-sm text-red-500">{{ $errors->first($name01) }}</p>
        </div>
    </div>
    <div>
        <span class="mx-2 text-sm">〜</span>
    </div>
    <div class="flex-col basis-1/3">
        <div class="flex">
            <input type="{{ $type }}" name="{{ $name02 }}" id="{{ $name02 }}"
                value="{{ $value02 }}" {{ $disabled ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
                {{ $attributes->merge([
                    'class' =>
                        'focus:ring-indigo-500 focus:border-indigo-500 min-w-0 w-full block w-full sm:text-sm border-gray-300 rounded-l p-2 z-10',
                ]) }}
                maxlength={{ $maxlength }}>
            @if ($unit)
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-r border border-l-0 border-gray-300">
                    {{ $unit }}
                </span>
            @endif
        </div>
        <div>
            <p class="mt-2 text-sm text-red-500">{{ $errors->first($name02) }}</p>
        </div>
    </div>
</div>
@if (isset($attention))
    <span class="mt-2 text-sm text-red-500">{{ $attention }}</span>
@endif
