<x-app-layout>

    <div class="container mx-auto flex flex-col">
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                税率追加
            </div>
        </div>
        <form action="{{ route('operator.zeiritsu.store') }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
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
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <x-button-submit>追加する</x-button-submit>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
