<x-app-layout>
    <x-operator.page-index>
        <div class="flex mx-4 mb-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                オペレータ一覧
            </div>
            <div class="text-right">
                <x-button-new :route="route('operator.operator.create')">新規追加</x-button-new>
            </div>
        </div>
        <x-operator.page-index.table>
            <x-operator.page-index.thead :titles="['名前','稼働','フィルドコード','操作']">
            </x-operator.page-index.thead>
            <x-operator.page-index.tbody>
                @foreach ($operator_list as $operator)
                    <x-operator.page-index.trow>
                        <x-operator.page-index.tcell>
                            {{ $operator->name }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            {{ $operator->is_active->label() }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            {{ implode(' / ', $operator->fld_code_list) }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            <div class="inline-flex">
                                <x-button-edit :route="route('operator.operator.edit', $operator->id)">
                                    編集
                                </x-button-edit>
                                <div class="ml-2">
                                    <form action="{{ route('operator.operator.delete', $operator->id) }}"
                                        method="POST">
                                        @method('delete')
                                        @csrf
                                        <x-button-delete :route="route('operator.operator.delete', $operator->id)">
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
