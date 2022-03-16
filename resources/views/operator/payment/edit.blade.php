<x-app-layout>
    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                支払方法編集 / {{ $payment->payment_method }}
            </div>
        </div>

        <form action="{{ route('operator.payment.update', $payment->payment_id) }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-6">
                    @if ($payment->payment_id == 5)
                        <input type="hidden" name="charge" value="{{ $payment->charge }}">
                        <x-input name="" value="設定できません" required disabled>
                            手数料
                        </x-input>
                        <x-input-error>{{ $errors->first('charge') }}</x-input-error>
                    @else
                        <x-input name="charge" value="{{ old('charge', $payment->charge) }}" required unit="円"
                            maxlength="8">
                            手数料
                        </x-input>
                        <x-input-error>{{ $errors->first('charge') }}</x-input-error>
                    @endif

                </div>
                <div class="col-span-6">
                    <x-input-range name01="rule_max" value01="{{ old('rule_max', $payment->rule_max) }}"
                        name02="upper_rule" value02="{{ old('upper_rule', $payment->upper_rule) }}" unit="円"
                        maxlength=8>
                        利用条件(円)
                    </x-input-range>
                </div>
            </x-operator.page-edit.form-inner>
        </form>
    </x-operator.page-edit>
</x-app-layout>
