<?php

namespace App\Domains\Auth\Services;

use App\Domains\Auth\DTO\LoginData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function attempt(LoginData $data): void
    {
        $credentials = [
            'email' => $data->email,
            'password' => $data->password,
        ];

        if (! Auth::attempt($credentials, $data->remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        request()->session()->regenerate();
    }

    /**
     * Выход пользователя.
     */
    public function logout(): void
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
}
