<x-app-layout>
    <x-operator.page-index>
        <div class="flex mx-4 mb-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                支払方法一覧
            </div>
        </div>
        <x-operator.page-index.table>
            <x-operator.page-index.thead :titles="['ID','支払方法','手数料（円）','利用条件','操作']">
            </x-operator.page-index.thead>
            <x-operator.page-index.tbody>
                @foreach ($payment_list as $payment)
                    <x-operator.page-index.trow>
                        <x-operator.page-index.tcell>
                            {{ $payment->payment_id }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            {{ $payment->payment_method }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            {{ $payment->charge }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            {{ $payment->rule_max }}～{{ $payment->upper_rule }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            <div class="inline-flex">
                                <x-button-edit :route="route('operator.payment.edit', $payment->payment_id)">
                                    編集
                                </x-button-edit>
                            </div>
                        </x-operator.page-index.tcell>
                    </x-operator.page-index.trow>
                @endforeach
            </x-operator.page-index.tbody>
        </x-operator.page-index.table>
    </x-operator.page-index>
</x-app-layout>
