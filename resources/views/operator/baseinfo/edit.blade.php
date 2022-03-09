<x-app-layout>

    <div class="container mx-auto flex flex-col">
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                基本情報管理
            </div>
        </div>

        <form action="{{ route('operator.baseinfo.update') }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-3">
                            <x-input name="company_name" value="{{ old('company_name', $baseinfo->company_name) }}">
                                会社名</x-input>
                            <x-input-error> {{ $errors->first('company_name') }}</x-input-error>
                        </div>
                        <div class="col-span-3">
                            <x-input name="company_kana" value="{{ old('company_kana', $baseinfo->company_kana) }}">
                                会社名(フリガナ)</x-input>
                            <x-input-error>{{ $errors->first('company_kana') }}</x-input-error>
                        </div>
                        <div class="col-span-3">
                            <x-input name="shop_name" value="{{ old('shop_name', $baseinfo->shop_name) }}">店名
                            </x-input>
                            <x-input-error>{{ $errors->first('shop_name') }}</x-input-error>
                        </div>
                        <div class="col-span-3">
                            <x-input name="shop_kana" value="{{ old('shop_kana', $baseinfo->shop_kana) }}">店名(フリガナ)
                            </x-input>
                            <x-input-error>{{ $errors->first('shop_kana') }}</x-input-error>
                        </div>

                    </div>
                    {{-- <div>
                      <label class="block text-sm font-medium text-gray-700"> Cover photo </label>
                      <div
                          class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                          <div class="space-y-1 text-center">
                              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                  viewBox="0 0 48 48" aria-hidden="true">
                                  <path
                                      d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                  <label for="file-upload"
                                      class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                      <span>Upload a file</span>
                                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                  </label>
                                  <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                          </div>
                      </div>
                  </div> --}}
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">変更</button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
