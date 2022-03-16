<aside>

    {{-- 基本情報管理 --}}
    @if (request()->is('operator/basis/*'))
        <div class="w-52 relative">
            <div class="flex justify-center flex-col fixed bg-white rounded-md shadow pb-3 w-52">
                <div class="text-gray-900 font-extrabold tracking-tight text-sm py-4 ml-8 border-gray-200 border-b">
                    基本情報管理
                </div>
                <ul class="ml-8 divide-y">
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.shop-master') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            SHOPマスタ
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.tradelaw') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            特定商取引法
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.deliv') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            配送方法設定
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.payment') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            支払方法設定
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.point') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            ポイント設定
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.mailtemplate') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            メールテンプレート
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.zeiritsu') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            税率設定
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.shikaku') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            資格マスタ
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.operator') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            オペレータ管理
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    @endif
    {{-- 商品管理 --}}
    @if (request()->is('operator/product/*'))
        <div class="w-52 relative">
            <div class="flex justify-center flex-col fixed bg-white rounded-md shadow pb-3 w-52">
                <div class="text-gray-900 font-extrabold tracking-tight text-sm py-4 ml-8 border-gray-200 border-b">
                    商品管理
                </div>
                <ul class="ml-8 divide-y">
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.shop-master') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            商品マスタ
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.shop-master') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            SHOPマスタ
                        </a>
                    </li>
                    <li class=" hover:bg-pink-50">
                        <a href="{{ route('operator.shop-master') }}"
                            class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                            SHOPマスタ
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    @endif

</aside>
