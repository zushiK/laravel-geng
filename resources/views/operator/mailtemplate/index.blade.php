<x-app-layout>
    <x-operator.page-index>
        <div class="flex mx-4 mb-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                メールテンプレート 一覧
            </div>
        </div>
        <x-operator.page-index.table>
            <x-operator.page-index.thead :titles="['テンプレート ','メールタイトル','操作']">
            </x-operator.page-index.thead>
            <x-operator.page-index.tbody>
                @foreach ($mailtemplate_list as $mailtemplate)
                    <x-operator.page-index.trow>
                        <x-operator.page-index.tcell>
                            {{ $mailtemplate->template_id->label() }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            {{ $mailtemplate->subject }}
                        </x-operator.page-index.tcell>
                        <x-operator.page-index.tcell>
                            <div class="inline-flex">
                                <x-button-edit
                                    :route="route('operator.mailtemplate.edit', $mailtemplate->template_id->value)">
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
