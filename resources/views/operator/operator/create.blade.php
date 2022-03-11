<x-app-layout>
    <x-operator.page-create>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                オペレータ編集
            </div>
        </div>

        <form action="{{ route('operator.operator.store') }}" method="POST">
            @csrf
            <x-operator.page-create.form-inner>
                <div class="col-span-3">
                    <x-input name="name" value="{{ old('name') }}">名前</x-input>
                    <x-input-error> {{ $errors->first('name') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="login_id" value="{{ old('login_id') }}">ログインID</x-input>
                    <x-input-error> {{ $errors->first('login_id') }}</x-input-error>
                </div>
                {{-- <div class=""></div> --}}
                <div class="col-span-3">
                    <x-input name="password">パスワード</x-input>
                    <x-input-error>{{ $errors->first('password') }}</x-input-error>
                </div>
                <div class="  col-span-3">
                    <x-input name="password_confirmation">パスワード（確認）</x-input>
                    <x-input-error>{{ $errors->first('password_confirm') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="fld_code_list" value="{{ old('fld_code_list') }}">フィルドコード
                    </x-input>
                    <x-input-error>{{ $errors->first('fld_code_list') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input-dropdown name="is_active" value="{{ old('is_active') }}"
                        :options="$operator_is_active_enum">稼働
                    </x-input-dropdown>
                    <x-input-error>{{ $errors->first('is_active') }}</x-input-error>
                </div>


            </x-operator.page-create.form-inner>
        </form>
    </x-operator.page-create>

</x-app-layout>
