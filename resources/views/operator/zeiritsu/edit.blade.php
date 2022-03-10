<x-app-layout>

    <div class="container mx-auto flex flex-col">
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                税率編集
            </div>
        </div>

        <form action="{{ route('operator.zeiritsu.update', $zeiritsu->tax_rule_id) }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-3">
                            <x-input name="tax_rate" value="{{ old('tax_rate', $zeiritsu->tax_rate) }}" required>
                                消費税率
                            </x-input>
                            <x-input-error> {{ $errors->first('tax_rate') }}</x-input-error>
                        </div>
                        <div class="col-span-3">
                            <x-input-datetime name="apply_date"
                                value="{{ old('apply_date', $zeiritsu->apply_date) }}">
                                適用日時
                            </x-input-datetime>
                            <x-input-error>{{ $errors->first('apply_date') }}</x-input-error>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        完了
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
