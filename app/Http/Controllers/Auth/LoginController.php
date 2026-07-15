<?php

namespace App\Http\Controllers\Auth;

use App\Domains\Auth\Actions\LoginUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

final class LoginController extends Controller
{
    /**
     * Показать страницу входа.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Выполнить вход.
     */
    public function store(
        LoginRequest $request,
        LoginUser $action,
    ): RedirectResponse {
        $action->handle($request->toDto());

        return redirect()->intended(route('dashboard'));
    }
}
