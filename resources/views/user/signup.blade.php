<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 新規登録</title>
</head>
<!-- ログイン画面 -->

<body class="">
    <x-header></x-header>
    <div class="page signup-page">
        <form class="form" action="/signup" method="post">
            @csrf
            <div class="form-item newname">
                <label for="name">名前</label>
                <input type="text" id="name" name="name" />
            </div>
            <div class="form-item newemail">
                <label for="email">Eメール</label>
                <input type="text" id="email" name="email" />
            </div>
            <div class="form-item newpassword">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" />
            </div>

            <div class="new-button">
                <button class="button-white" type="submit">新規登録</button>
            </div>
        </form>
        @error('name')
        <div class="mt-3">
            <p class="text-red-500">
                {{ $message }}
            </p>
        </div>
        @enderror
        @error('email')
        <div class="mt-3">
            <p class="text-red-500">
                {{ $message }}
            </p>
        </div>
        @enderror
        @error('password')
        <div class="mt-3">
            <p class="text-red-500">
                {{ $message }}
            </p>
        </div>
        @enderror
    </div>
</body>

<script src="{{ asset('/js/app.js') }}"></script>
<style scoped>
    .signup-page {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .signup-page .title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .signup-page .form {
        width: 60vw;
    }

    .signup-page input {
        height: 30px;
        border-radius: 10px;
        background-color: lightgray;
    }

    .signup-page .form-item {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }

    .signup-page .new-button {
        text-align: center;
        margin-top: 10px;
    }

    .signup-page button {
        width: 50%;
        height: 30px;
        font-size: 18px;
    }

    .container {

        flex-direction: column;
    }
</style>

</html>