@props(['titles' => []])
<thead class="bg-pink-50">
    <tr>
        @foreach ($titles as $title)
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                {{ $title }}</th>
        @endforeach

    </tr>
</thead>
