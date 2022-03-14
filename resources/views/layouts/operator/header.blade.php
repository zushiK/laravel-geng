<header>
    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 py-2 md:pb-0">





            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white z-20"
                id="nav-content">
                <a href="{{ route('operator.home') }}"
                    class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold " href="#">
                    <img src="{{ asset('img/logo.svg') }}" class="w-28">
                </a>
                <ul class="mx-10 list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0 relative group">
                        <a href="" onclick="event.preventDefault();"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline group-hover:text-gray-900 border-b-2 border-white group-hover:border-pink-400">
                            <div class="flex">
                                <span class="px-8 pb-1 md:pb-0">基本情報管理</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                        <div
                            class="opacity-0 group-hover:visible group-hover:opacity-100 transition invisible absolute left-0 z-20 py-1 bg-white border border-gray-100 rounded-md shadow-xl lg:left-auto lg:right-0 w-full">
                            <a href="{{ route('operator.shop-master') }}"
                                class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                                SHOPマスタ
                            </a>
                            <a href="{{ route('operator.operator') }}"
                                class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                                オペレータ管理
                            </a>
                        </div>
                    </li>
                    <li class="mr-6 my-2 md:my-0 relative group">
                        <a href="" onclick="event.preventDefault();"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline group-hover:text-gray-900 border-b-2 border-white group-hover:border-pink-400">
                            <div class="flex">
                                <span class="px-8 pb-1 md:pb-0">商品管理</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                        <div
                            class="opacity-0 group-hover:visible group-hover:opacity-100 transition invisible absolute left-0 z-20 py-1 bg-white border border-gray-100 rounded-md shadow-xl lg:left-auto lg:right-0 w-full">
                            <a href="{{ route('operator.shikaku') }}"
                                class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                                資格管理
                            </a>
                        </div>
                    </li>
                    {{--  --}}
                    <li class="mr-6 my-2 md:my-0 relative group">
                        <a href="" onclick="event.preventDefault();"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline group-hover:text-gray-900 border-b-2 border-white group-hover:border-pink-400">
                            <div class="flex">
                                <span class="px-8 pb-1 md:pb-0">会員管理</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                        <div
                            class="opacity-0 group-hover:visible group-hover:opacity-100 transition invisible absolute left-0 z-20 py-1 bg-white border border-gray-100 rounded-md shadow-xl lg:left-auto lg:right-0 w-full">
                            <a href="{{ route('operator.shikaku') }}"
                                class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                                資格管理
                            </a>
                        </div>
                    </li>
                    {{--  --}}
                    <li class="mr-6 my-2 md:my-0 relative group">
                        <a href="" onclick="event.preventDefault();"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline group-hover:text-gray-900 border-b-2 border-white group-hover:border-pink-400">
                            <div class="flex">
                                <span class="px-8 pb-1 md:pb-0">受注管理</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                        <div
                            class="opacity-0 group-hover:visible group-hover:opacity-100 transition invisible absolute left-0 z-20 py-1 bg-white border border-gray-100 rounded-md shadow-xl lg:left-auto lg:right-0 w-full">
                            <a href="{{ route('operator.shikaku') }}"
                                class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                                資格管理
                            </a>
                        </div>
                    </li>
                    {{--  --}}
                    <li class="mr-6 my-2 md:my-0 relative group">
                        <a href="" onclick="event.preventDefault();"
                            class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline group-hover:text-gray-900 border-b-2 border-white group-hover:border-pink-400">
                            <div class="flex">
                                <span class="px-8 pb-1 md:pb-0">データの入出力</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                        <div
                            class="opacity-0 group-hover:visible group-hover:opacity-100 transition invisible absolute left-0 z-20 py-1 bg-white border border-gray-100 rounded-md shadow-xl lg:left-auto lg:right-0 w-full">
                            <a href="{{ route('operator.shikaku') }}"
                                class="block px-4 py-2 text-gray-500  duration-200 transform  hover:text-gray-800">
                                資格管理
                            </a>
                        </div>
                    </li>


                </ul>
                <div class="relative text-sm">
                    <form method="POST" action="{{ route('operator.logout') }}">
                        @csrf
                        <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                            href="{{ route('operator.logout') }}"
                            onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a>

                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div role="none" class="mt-24"></div>

</header>
