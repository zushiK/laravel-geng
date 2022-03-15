<x-app-layout>

    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                SHOPマスタ
            </div>
        </div>

        @php
            
        @endphp
        <form action="{{ route('operator.shop-master.update') }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-6">
                    <x-input name="company_name" value="{{ old('company_name', $baseinfo->company_name) }}" required
                        attention="(上限50文字)">
                        会社名</x-input>
                    <x-input-error> {{ $errors->first('company_name') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="company_kana" value="{{ old('company_kana', $baseinfo->company_kana) }}" required
                        attention="(上限50文字)">
                        会社名(フリガナ)</x-input>
                    <x-input-error>{{ $errors->first('company_kana') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="shop_name" value="{{ old('shop_name', $baseinfo->shop_name) }}" required
                        attention="(上限50文字)">店名
                    </x-input>
                    <x-input-error>{{ $errors->first('shop_name') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="shop_kana" value="{{ old('shop_kana', $baseinfo->shop_kana) }}" required
                        attention="(上限50文字)">店名(フリガナ)
                    </x-input>
                    <x-input-error>{{ $errors->first('shop_kana') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="shop_name_eng" value="{{ old('shop_name_eng', $baseinfo->shop_name_eng) }}"
                        required attention="(上限50文字)">店名(英語表記)
                    </x-input>
                    <x-input-error>{{ $errors->first('shop_kana') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <address-component :hissu="{{ Js::from(true) }}" :addresslabel="{{ Js::from('所在地') }}"
                        :zip1="{{ Js::from($baseinfo->zip01) }}" :zip1name="{{ Js::from('zip01') }}"
                        :zip2="{{ Js::from($baseinfo->zip02) }}" :zip2name="{{ Js::from('zip02') }}"
                        :pref={{ Js::from($baseinfo->pref) }} :prefname="{{ Js::from('pref') }}"
                        :add1="{{ Js::from($baseinfo->addr01) }}" :add1name="{{ Js::from('addr01') }}"
                        :add1="{{ Js::from($baseinfo->addr01) }}" :add2name="{{ Js::from('addr02') }}"
                        :add2="{{ Js::from($baseinfo->addr02) }}">
                    </address-component>
                </div>

                <div class="col-span-6">
                    <x-input-tel name01="tel01" name02="tel02" name03="tel03"
                        value01="{{ old('tel01', $baseinfo->tel01) }}"
                        value02="{{ old('tel02', $baseinfo->tel02) }}"
                        value03="{{ old('tel03', $baseinfo->tel03) }}" required>
                        TEL
                    </x-input-tel>
                    <x-input-error> {{ $errors->first('tel01') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-tel name01="fax01" name02="fax02" name03="fax03"
                        value01="{{ old('fax01', $baseinfo->fax01) }}"
                        value02="{{ old('fax02', $baseinfo->fax02) }}"
                        value03="{{ old('fax03', $baseinfo->fax03) }}">
                        FAX
                    </x-input-tel>
                    <x-input-error> {{ $errors->first('fax01') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="business_hour" value="{{ old('business_hour', $baseinfo->business_hour) }}"
                        required attention="(上限50文字)">営業時間
                    </x-input>
                    <x-input-error>{{ $errors->first('business_hour') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="email01" value="{{ old('email01', $baseinfo->email01) }}" required>
                        商品注文受付メールアドレス
                    </x-input>
                    <x-input-error>{{ $errors->first('email01') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="email02" value="{{ old('email02', $baseinfo->email02) }}" required>
                        問い合わせ受付メールアドレス
                    </x-input>
                    <x-input-error>{{ $errors->first('email02') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="email03" value="{{ old('email03', $baseinfo->email03) }}" required>
                        メール送信元メールアドレス
                    </x-input>
                    <x-input-error>{{ $errors->first('email03') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="email04" value="{{ old('email04', $baseinfo->email04) }}" required>
                        送信エラー受付メールアドレス
                    </x-input>
                    <x-input-error>{{ $errors->first('email04') }}</x-input-error>
                </div>
            </x-operator.page-edit.form-inner>

        </form>
    </x-operator.page-edit>

</x-app-layout>
