<?php
namespace App\DTO;
use Spatie\LaravelData\Data;
Class BlogsTagsDTO extends Data
{
    public function __construct( public array $tag_id)
    {
    }
}
