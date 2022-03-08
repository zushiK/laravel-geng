@props(['options', 'value', 'name'])
<label for="{{ $name }}" class="block text-sm font-medium text-gray-700">
    {{ $slot }} </label>
<div class="mt-1 flex rounded-md shadow-sm">
    <select name="{{ $name }}" id="{{ $name }}"
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
