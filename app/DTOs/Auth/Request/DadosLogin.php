<?php

namespace App\DTOs\Auth\Request;

use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Exists;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;

class DadosLogin extends Data
{
    /*
     * Class constructor.
     */
    public function __construct(
        #[Required, Email, Exists('users', 'email')]
        public string $email,

        #[Required, StringType]
        public string $password,
    ) {}
}
