<?php
    namespace App\DTO;
    use Spatie\LaravelData\Data;
    Class ContactDTO extends Data
    {
        public function __construct(public string $name,  public string $subject, public string $email, public string $message)
        {
        }
    }