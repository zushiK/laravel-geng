@props(['type' => 'success'])
<div class="title text-xl font-medium mb-3">
    @if ($type === 'error')
        <div class="py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200" role="alert">
            {{ $slot }}
        </div>
    @else
        <div class="py-3 px-5 mb-4 bg-green-100 text-green-900 text-sm rounded-md border border-green-200" role="alert">
            {{ $slot }}
        </div>
    @endif
</div>
