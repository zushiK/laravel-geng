<x-app-layout>
    <x-operator.page-index>
        <div class="flex mx-4 mb-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                資格一覧
            </div>
            <div class="text-right">
                <x-button-new :route="route('operator.zeiritsu.create')">新規追加</x-button-new>
            </div>
        </div>
        <x-operator.page-index.table>
            <x-operator.page-index.thead :titles="['消費税率','課税規則','操作']">
            </x-operator.page-index.thead>
            <x-operator.page-index.tbody>
                @foreach ($zeiritsu_list as $zeiritsu)
                    <x-operator.page-index.trow>
                        <x-operator.page-index.tcell>
                            {{ $zeiritsu->tax_rate }}％
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            {{ $zeiritsu->apply_date }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            <div class="inline-flex">
                                <x-button-edit :route="route('operator.zeiritsu.edit', $zeiritsu->tax_rule_id)">
                                    編集
                                </x-button-edit>
                                <div class="ml-2">
                                    <form action="{{ route('operator.zeiritsu.delete', $zeiritsu->tax_rule_id) }}"
                                        method="POST">
                                        @method('delete')
                                        @csrf
                                        <x-button-delete
                                            :route="route('operator.zeiritsu.delete', $zeiritsu->tax_rule_id)">
                                            削除
                                        </x-button-delete>
                                    </form>
                                </div>
                            </div>
                        </x-operator.page-index.tcell>
                    </x-operator.page-index.trow>
                @endforeach
            </x-operator.page-index.tbody>
        </x-operator.page-index.table>
    </x-operator.page-index>
</x-app-layout>
