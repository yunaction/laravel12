<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>
<body>
<h1>ユーザー登録</h1>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('registration.submit') }}" method="POST">
    @csrf
    <label for="name">名前:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    <br>

    <label for="email">メールアドレス:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    <br>

    <label for="password">パスワード:</label>
    <input type="password" id="password" name="password" required>
    <br>

    <label for="password_confirmation">パスワード確認:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
    <br>

    <button type="submit">登録</button>
</form>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
