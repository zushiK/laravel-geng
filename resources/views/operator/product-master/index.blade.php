<x-app-layout>
    <x-operator.page-index>
        <div class="flex mx-4 mb-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                商品一覧
            </div>
            <div class="text-right">
                <x-button-new :route="route('operator.shikaku.create')">新規追加</x-button-new>
            </div>
        </div>
        <x-operator.page-index.table>
            <x-operator.page-index.thead :titles="['資格コード','操作']">
            </x-operator.page-index.thead>
            <x-operator.page-index.tbody>
                @foreach ($shikaku_list as $shikaku)
                    <x-operator.page-index.trow>
                        <x-operator.page-index.tcell>
                            {{ $shikaku->name }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            <div class="inline-flex">
                                <x-button-edit :route="route('operator.product.edit', $shikaku->product_id)">
                                    編集
                                </x-button-edit>
                                <div class="ml-2">
                                    {{-- <form action="{{ route('operator.shikaku.delete', $shikaku->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <x-button-delete :route="route('operator.shikaku.delete', $shikaku->id)">
                                            削除
                                        </x-button-delete>
                                    </form> --}}
                                </div>
                            </div>
                        </x-operator.page-index.tcell>
                    </x-operator.page-index.trow>
                @endforeach
            </x-operator.page-index.tbody>
        </x-operator.page-index.table>
        <div class="w-full flex justify-center mt-4">
            {{ $shikaku_list->onEachSide(0)->links() }}
        </div>
    </x-operator.page-index>
</x-app-layout>
