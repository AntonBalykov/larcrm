<?php

namespace App\Http\Controllers\Auth;

use App\Domains\Auth\Actions\LogoutUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

final class LogoutController extends Controller
{
    public function __invoke(
        LogoutUser $action,
    ): RedirectResponse {
        $action->handle();

        return redirect()->route('login');
    }
}
