<x-app-layout>
    <div>
        ようこそ！
        Laravel認証を突破できなかったら
        ECCUBEの認証にかけるよ
    </div>
    <top-page></top-page>
</x-app-layout>

@auth('operator')
    dd(auth()->user())
@endauth
@auth('customer')
    dd(auth()->user())
@endauth
@auth('eccube_customer')
    dd(auth()->user())
@endauth
