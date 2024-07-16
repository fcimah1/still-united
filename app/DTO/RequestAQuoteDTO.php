<?php
namespace App\DTO;
use Spatie\LaravelData\Data;
Class RequestAQuoteDTO extends Data
{
    public function __construct(
        public string $first_name,
        public string $last_name,
        public string $email,
        public string $company,
        public string $city,
        public string $address,
        public string $zip,
        public string $telephone,
        public string $no_of_pieces,
        public string $total_weight,
        public string $height,
        public string $width,
        public string $depth,
        public string $commodity,
        public string $message,
        )
    {
    }
}
?>