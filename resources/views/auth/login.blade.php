@extends('layouts.guest')

@section('content')

    <div class="login">

        <h1>Авторизация</h1>

        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div>
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    autofocus
                >
                @error('email')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>Пароль</label>
                <input
                    type="password"
                    name="password"
                >
                @error('password')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>
                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                    >
                    Запомнить меня
                </label>
            </div>
            <button type="submit">Войти</button>
        </form>
    </div>
@endsection
