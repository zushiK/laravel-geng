<x-app-layout>
    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                資格編集
            </div>
        </div>

        <form action="{{ route('operator.shikaku.update', $shikaku->id) }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-3">
                    <x-input name="code" value="{{ old('code', $shikaku->code) }}">資格コード</x-input>
                    <x-input-error> {{ $errors->first('code') }}</x-input-error>
                </div>
                {{-- <div class=""></div> --}}
                <div class="col-span-3">
                    <x-input name="name" value="{{ old('name', $shikaku->name) }}">資格名</x-input>
                    <x-input-error>{{ $errors->first('name') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="name_short" value="{{ old('name_short', $shikaku->name_short) }}">資格名（短縮）
                    </x-input>
                    <x-input-error>{{ $errors->first('name_short') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="rate" value="{{ old('rate', $shikaku->rate) }}">割合</x-input>
                    <x-input-error>{{ $errors->first('rate') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input-dropdown name="struct" value="{{ old('struct', $shikaku->struct->value) }}"
                        :options="$shikaku_struct_list">資格階層
                    </x-input-dropdown>
                    <x-input-error>{{ $errors->first('struct') }}</x-input-error>
                </div>
            </x-operator.page-edit.form-inner>
        </form>
    </x-operator.page-edit>

</x-app-layout>
