<x-app-layout>
    <x-operator.page-create>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                税率追加
            </div>
        </div>
        <form action="{{ route('operator.zeiritsu.store') }}" method="POST">
            @csrf
            <x-operator.page-create.form-inner>

                <div class="col-span-3">
                    <x-input name="tax_rate" extra='required'>
                        消費税率
                    </x-input>
                    <x-input-error> {{ $errors->first('tax_rate') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input-datetime name="apply_date">適用日時
                    </x-input-datetime>
                    <x-input-error>{{ $errors->first('apply_date') }}</x-input-error>
                </div>
            </x-operator.page-create.form-inner>
        </form>
    </x-operator.page-create>

</x-app-layout>
