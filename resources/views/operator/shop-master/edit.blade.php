<x-app-layout>

    <x-operator.page-create>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                SHOPマスタ
            </div>
        </div>

        <form action="{{ route('operator.shop-master.update') }}" method="POST">
            @csrf
            <x-operator.page-create.form-inner>
                <div class="col-span-3">
                    <x-input name="company_name" value="{{ old('company_name', $baseinfo->company_name) }}">
                        会社名</x-input>
                    <x-input-error> {{ $errors->first('company_name') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="company_kana" value="{{ old('company_kana', $baseinfo->company_kana) }}">
                        会社名(フリガナ)</x-input>
                    <x-input-error>{{ $errors->first('company_kana') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="shop_name" value="{{ old('shop_name', $baseinfo->shop_name) }}">店名
                    </x-input>
                    <x-input-error>{{ $errors->first('shop_name') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="shop_kana" value="{{ old('shop_kana', $baseinfo->shop_kana) }}">店名(フリガナ)
                    </x-input>
                    <x-input-error>{{ $errors->first('shop_kana') }}</x-input-error>
                </div>

            </x-operator.page-create.form-inner>

        </form>
    </x-operator.page-create>

</x-app-layout>
