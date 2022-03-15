<x-app-layout>
    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                ポイント設定編集
            </div>
        </div>

        <form action="{{ route('operator.point.update', $point->id) }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-3">
                    <x-input name="point_rate" value="{{ old('point_rate', $point->point_rate) }}" required>
                        ポイント付与率（初期値）
                    </x-input>
                    <x-input-error> {{ $errors->first('point_rate') }}</x-input-error>
                </div>
                <div class="col-span-3">
                    <x-input name="welcome_point" value="{{ old('welcome_point', $point->welcome_point) }}" required>
                        会員登録時付与ポイント
                    </x-input>
                    <x-input-error>{{ $errors->first('welcome_point') }}</x-input-error>
                </div>
            </x-operator.page-edit.form-inner>

        </form>
    </x-operator.page-edit>

</x-app-layout>
