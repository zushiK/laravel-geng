@props(['options', 'value', 'name', 'required' => false])
<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
    {{ $slot }}
    @if ($required)
        <span class="mt-2 text-sm text-red-500">必須</span>
    @endif
</label>
<div class="mt-1 flex rounded-md shadow-sm">
    <select name="{{ $name }}" id="{{ $name }}" {{ $required ? 'required' : '' }}
        {{ $attributes->merge([
            'class' => 'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300',
        ]) }}>
        <option value="">選択してください</option>
        @foreach ($options as $option)
            {{ $option->label() }}
            <option value="{{ $option->value }}" {{ $value == $option->value ? 'selected' : '' }}>
                {{ $option->label() }}
            </option>
        @endforeach
    </select>
</div>
