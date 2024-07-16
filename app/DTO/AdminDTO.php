<?php
namespace App\DTO;
use Spatie\LaravelData\Data;
Class AdminDTO extends Data
{
    public function __construct(public string $name, public string $email, public string $password)
    {
        $this->password = bcrypt($password);
    }
}
