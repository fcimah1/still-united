<?php
namespace App\DTO;
use Spatie\LaravelData\Data;
Class TagDTO extends Data
{
    public function __construct(public string $name)
    {
    }
}
