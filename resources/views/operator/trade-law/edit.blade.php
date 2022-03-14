<x-app-layout>
    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                特定商取引法
            </div>
        </div>
        <form action="{{ route('operator.tradelaw.update', $trade_law->id) }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-6">
                    <x-input name="law_company" value="{{ old('law_company', $trade_law->law_company) }}" required
                        attention="(上限50文字)">
                        販売業者
                    </x-input>
                    <x-input-error> {{ $errors->first('law_company') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="law_manager" value="{{ old('law_manager', $trade_law->law_manager) }}" required
                        attention="(上限50文字)">
                        運営責任者
                    </x-input>
                    <x-input-error> {{ $errors->first('law_manager') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <address-component :addresslabel="{{ Js::from('所在地') }}"
                        :zip1="{{ Js::from($trade_law->law_zip01) }}" :zip1name="{{ Js::from('law_zip01') }}"
                        :zip2="{{ Js::from($trade_law->law_zip02) }}" :zip2name="{{ Js::from('law_zip02') }}"
                        :pref={{ Js::from($trade_law->law_pref) }} :prefname="{{ Js::from('law_pref') }}"
                        :add1="{{ Js::from($trade_law->law_addr01) }}" :add1name="{{ Js::from('law_addr01') }}"
                        :add1="{{ Js::from($trade_law->law_addr01) }}" :add2name="{{ Js::from('law_addr02') }}"
                        :add2="{{ Js::from($trade_law->law_addr02) }}">
                    </address-component>
                </div>
                <div class="col-span-6">
                    <x-input-tel name01="law_tel01" name02="law_tel02" name03="law_tel03"
                        value01="{{ old('law_tel01', $trade_law->law_tel01) }}"
                        value02="{{ old('law_tel02', $trade_law->law_tel02) }}"
                        value03="{{ old('law_tel03', $trade_law->law_tel03) }}" required>
                        TEL
                    </x-input-tel>
                    <x-input-error> {{ $errors->first('law_tel01') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-tel name01="law_fax01" name02="law_fax02" name03="law_fax03"
                        value01="{{ old('law_fax01', $trade_law->law_fax01) }}"
                        value02="{{ old('law_fax02', $trade_law->law_fax02) }}"
                        value03="{{ old('law_fax03', $trade_law->law_fax03) }}">
                        FAX
                    </x-input-tel>
                    <x-input-error> {{ $errors->first('law_fax01') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="law_email" value="{{ old('law_email', $trade_law->law_email) }}" required>
                        メールアドレス
                    </x-input>
                    <x-input-error> {{ $errors->first('law_email') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="law_url" value="{{ old('law_url', $trade_law->law_url) }}" required
                        attention="(上限50文字)">
                        URL
                    </x-input>
                    <x-input-error> {{ $errors->first('law_url') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="law_term01" value="{{ old('law_term01', $trade_law->law_term01) }}"
                        required attention="(上限1000文字)">
                        商品代金以外の必要料金
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('law_term01') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="law_term02" value="{{ old('law_term02', $trade_law->law_term02) }}"
                        required attention="(上限1000文字)">
                        注文方法
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('law_term02') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="law_term03" value="{{ old('law_term03', $trade_law->law_term03) }}"
                        required attention="(上限1000文字)">
                        支払方法
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('law_term03') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="law_term04" value="{{ old('law_term04', $trade_law->law_term04) }}"
                        required attention="(上限1000文字)">
                        支払期限
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('law_term04') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="law_term05" value="{{ old('law_term05', $trade_law->law_term05) }}"
                        required attention="(上限1000文字)">
                        引き渡し時期
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('law_term05') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="law_term06" value="{{ old('law_term06', $trade_law->law_term06) }}"
                        required attention="(上限1000文字)">
                        返品・交換について
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('law_term06') }}</x-input-error>
                </div>
            </x-operator.page-edit.form-inner>
        </form>
    </x-operator.page-edit>
</x-app-layout>
