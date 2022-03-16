<x-app-layout>
    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                税率編集
            </div>
        </div>

        <form action="{{ route('operator.zeiritsu.update', $zeiritsu->tax_rule_id) }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-3">
                    <x-input name="tax_rate" value="{{ old('tax_rate', $zeiritsu->tax_rate) }}" required unit="%">
                        消費税率
                    </x-input>
                    <x-input-error> {{ $errors->first('tax_rate') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input-datetime name="apply_date" value="{{ old('apply_date', $zeiritsu->apply_date) }}">
                        適用日時
                    </x-input-datetime>
                    <x-input-error>{{ $errors->first('apply_date') }}</x-input-error>
                </div>
            </x-operator.page-edit.form-inner>

        </form>
    </x-operator.page-edit>

</x-app-layout>
