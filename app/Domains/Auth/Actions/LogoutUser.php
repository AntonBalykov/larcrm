<?php

namespace App\Domains\Auth\Actions;

use App\Domains\Auth\Services\AuthService;

final readonly class LogoutUser
{
    public function __construct(
        private AuthService $authService,
    ) {
    }

    public function handle(): void
    {
        $this->authService->logout();
    }
}
