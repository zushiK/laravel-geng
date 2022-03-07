<x-app-layout>

    <div class="container mx-auto flex justify-center flex-col">
        @if (session('message'))
            <x-success-msg>
                {{ session('message') }}
            </x-success-msg>
        @endif
        @if (count($errors) > 0)
            <x-error-msg type="error">
                {{ $errors->first() }}
            </x-error-msg>
        @endif
        <form action="{{ route('operator.shikaku.create') }}" method="post">
            @csrf
            <div class="border border-gray-200">
                <div class=" flex justify-between px-10 py-8 ">
                    <div>
                        <x-label for="code" value="資格コード" />
                        <x-input name="code" value="{{ old('code') }}"></x-input>
                    </div>
                    <div>
                        <x-label for="name" value="資格名" />
                        <x-input name="name" value="{{ old('name') }}"></x-input>
                    </div>
                    <div>
                        <x-label for=" name_short" value="資格名（短縮）" />
                        <x-input name="name_short" value="{{ old('name_short') }}"></x-input>
                    </div>
                    <div>
                        <x-label for="rate" value="比率" />
                        <x-input name="rate" placeholder="半角数字" value="{{ old('rate') }}"></x-input>
                    </div>
                    <div>
                        <x-label for="struct" value="資格" />
                        <x-input-dropdown name="struct" :options="$shikaku_struct_list" value="{{ old('struct') }}">
                        </x-input-dropdown>
                    </div>
                </div>
                <div class="text-right mx-10 mb-8">
                    <input
                        class=" py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                        type="submit" value="登録">
                </div>
            </div>
        </form>
        <table class="table-auto mt-8">
            <thead>
                <tr>
                    <th class="px-4 py-2">資格コード</th>
                    <th class="px-4 py-2">資格名</th>
                    <th class="px-4 py-2">資格名（短縮）</th>
                    <th class="px-4 py-2">比率</th>
                    <th class="px-4 py-2">資格</th>
                    <th class="px-4 py-2">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shikaku_list as $shikaku)
                    <tr>
                        <td class="border px-4 py-2">
                            <x-input class="w-full" name="code" :value="$shikaku->code"></x-input>
                        </td>
                        <td class="border px-4 py-2">
                            <x-input class="w-full" name="name" :value="$shikaku->name"></x-input>
                        </td>
                        <td class="border px-4 py-2">
                            <x-input class="w-full" name="name" :value="$shikaku->name_short"></x-input>
                        </td>
                        <td class="border px-4 py-2">
                            <x-input class="w-full" name="name" :value="$shikaku->rate"></x-input>
                        </td>
                        <td class="border px-4 py-2">
                            <x-input-dropdown name="struct" :options="$shikaku_struct_list"
                                value="{{ old('struct') }}"></x-input-dropdown>
                        </td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('operator.shikaku.delete', $shikaku->id) }}" method="POST">
                                {{-- @csrf --}}
                                @method('delete')
                                @csrf
                                <a href="{{ route('operator.shikaku.delete', $shikaku->id) }}"
                                    onclick="event.preventDefault();this.closest('form').submit();">削除</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</x-app-layout>
