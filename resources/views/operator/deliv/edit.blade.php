<x-app-layout>

    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                配送方法設定
            </div>
        </div>

        @php
            
        @endphp
        <form action="{{ route('operator.deliv.update') }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-6">
                    <x-input name="name" value="{{ old('name', $inputs['name']) }}" required
                        attention="">
                        配送業者名</x-input>
                    <x-input-error> {{ $errors->first('name') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input name="service_name" value="{{ old('service_name', $inputs['service_name']) }}" required
                        attention="">
                        名称 </x-input>
                    <x-input-error>{{ $errors->first('service_name') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="remark" value="{{ old('remark', $inputs['remark'] ) }}" 
                        attention="">
                        説明
                    </x-input-textarea>
                    <x-input-error>{{ $errors->first('remark') }}</x-input-error>
                </div>

                <div class="col-span-6">
                    <label class="block text-sm font-medium text-gray-700">送料</label>
                </div>
                @foreach( $prefecture_list as $pref_id => $pref_name )
                <div class="col-span-3">
                    <x-input name="fees[{{$pref_id}}]" value="{{ old('fees.'.$pref_id, $inputs['fees'][$pref_id]) }}" 
                        attention="">
                        {{ $pref_name["prefname"] }} </x-input>
                    <x-input-error>{{ $errors->first('fees.'.$pref_id) }}</x-input-error>    
                </div>
                @endforeach
                <div class="col-span-6">
                    <label class="block text-sm font-medium text-gray-700">お届け時間帯</label>
                </div>
                @foreach( $inputs["times"] as $time_id => $time_name )
                <div class="col-span-3">
                    <x-input name="times[{{$time_id}}]" value="{{ old('times.'.$time_id, $inputs['times'][$time_id]) }}" 
                        attention="">
                    </x-input>
                    <x-input-error>{{ $errors->first('times.'.$time_id) }}</x-input-error>    
                </div>
                @endforeach


            </x-operator.page-edit.form-inner>

        </form>
    </x-operator.page-edit>

</x-app-layout>
