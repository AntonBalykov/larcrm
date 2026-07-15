<?php

namespace App\Domains\Auth\Actions;

use App\Domains\Auth\DTO\LoginData;
use App\Domains\Auth\Services\AuthService;

final readonly class LoginUser
{
    public function __construct(
        private AuthService $authService,
    ) {
    }

    public function handle(LoginData $data): void
    {
        $this->authService->attempt($data);
    }
}
