<x-app-layout>

    <form action="{{ route('operator.shikaku.create') }}" method="post">
        @csrf
        {{ $errors->first() }}
        <input type="text" name="name">
        <input type="text" name="name_short">
        <input type="text" name="rate">
        <input type="text" name="code">
        <input type="text" name="struct">
        <input type="submit" value="送信">
    </form>
    <div class="container mx-auto flex justify-center">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">名前</th>
                    <th class="px-4 py-2">短縮</th>
                    <th class="px-4 py-2">比率</th>
                    <th class="px-4 py-2">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shikaku_list as $shikaku)
                    <tr>
                        <td class="border px-4 py-2">{{ $shikaku->name }}</td>
                        <td class="border px-4 py-2">{{ $shikaku->name_short }}</td>
                        <td class="border px-4 py-2">{{ $shikaku->rate }}</td>
                        @php
                            dd(Auth::id());
                        @endphp
                        <td class="border px-4 py-2">
                            <a href="{{ route('operator.shikaku.delete', $shikaku->id) }}"></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
