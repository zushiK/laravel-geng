<x-app-layout>
    <x-operator.page-edit>
        <div class="flex m-4 justify-between">
            <div class="text-gray-900 text-3xl font-extrabold tracking-tight">
                メール設定 / {{ $mailtemplate->template_id->label() }}
            </div>
        </div>

        <form action="{{ route('operator.mailtemplate.update', $mailtemplate->template_id->value) }}" method="POST">
            @csrf
            <x-operator.page-edit.form-inner>
                <div class="col-span-6">
                    <x-input name="subject" value="{{ old('subject', $mailtemplate->subject) }}" required>
                        メールタイトル
                    </x-input>
                    <x-input-error>{{ $errors->first('subject') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="header" value="{{ old('header', $mailtemplate->header) }}"
                        attention="(上限3000文字)">
                        ヘッダー
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('header') }}</x-input-error>
                </div>
                <div class="col-span-6">
                    <x-input-textarea name="footer" value="{{ old('footer', $mailtemplate->footer) }}"
                        attention="(上限3000文字)">
                        フッター
                    </x-input-textarea>
                    <x-input-error> {{ $errors->first('footer') }}</x-input-error>
                </div>
            </x-operator.page-edit.form-inner>

        </form>
    </x-operator.page-edit>

</x-app-layout>
