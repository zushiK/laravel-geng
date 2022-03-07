@props(['options', 'value', 'name'])
<select name="{{ $name }}">
    <option value="">選択してください</option>
    @foreach ($options as $option)
        {{ $option->label() }}
        <option value="{{ $option->value }}" {{ $value == $option->value ? 'selected' : '' }}>
            {{ $option->label() }}
        </option>
    @endforeach
</select>
