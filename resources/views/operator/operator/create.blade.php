<x-app-layout>
    <x-operator.page-create>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                新規資格
            </div>
        </div>
        <form action="{{ route('operator.shikaku.store') }}" method="POST">
            @csrf

            <x-operator.page-create.form-inner>

                <div class="col-span-3">
                    <x-input name="code">資格コード</x-input>
                    <x-input-error> {{ $errors->first('code') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="name">資格名</x-input>
                    <x-input-error>{{ $errors->first('name') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="name_short">資格名（短縮）
                    </x-input>
                    <x-input-error>{{ $errors->first('name_short') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="rate">割合</x-input>
                    <x-input-error>{{ $errors->first('rate') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input-dropdown name="struct" value="{{ old('struct') }}" :options="$shikaku_struct_list">資格階層
                    </x-input-dropdown>
                    <x-input-error>{{ $errors->first('struct') }}</x-input-error>
                </div>
            </x-operator.page-create.form-inner>

        </form>
    </x-operator.page-create>
</x-app-layout>
