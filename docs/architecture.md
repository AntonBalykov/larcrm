Структура домена Auth
app/
└── Domains/
└── Auth/
├── Actions/
│   ├── LoginUser.php
│   ├── LogoutUser.php
│   ├── ChangePassword.php
│   ├── SendPasswordResetLink.php
│   └── ResetPassword.php
│
├── DTO/
│   ├── LoginData.php
│   ├── ChangePasswordData.php
│   └── ResetPasswordData.php
│
├── Services/
│   └── AuthService.php
│
├── Events/
│   ├── UserLoggedIn.php
│   ├── UserLoggedOut.php
│   └── PasswordChanged.php
│
├── Exceptions/
│   ├── InvalidCredentialsException.php
│   ├── AccountBlockedException.php
│   └── PasswordExpiredException.php
│
├── Listeners/
│   ├── LogLogin.php
│   └── SendLoginNotification.php
│
├── Policies/
│
├── Rules/
│
├── ValueObjects/
│
└── Contracts/
