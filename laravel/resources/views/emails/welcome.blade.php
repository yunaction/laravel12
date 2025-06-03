@component('mail::message')
    # ようこそ, {{ $user->name }} さん！

    私たちのサービスに登録いただきありがとうございます。
    今後ともどうぞよろしくお願いいたします。

    @component('mail::button', ['url' => config('app.url')])
        サービスへ移動
    @endcomponent

    ありがとうございます。
    {{ config('app.name') }} チーム
@endcomponent
