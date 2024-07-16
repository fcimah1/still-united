<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAQuote extends Model
{
    use HasFactory;
    protected $table = 'request_a_quotes';
    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "company",
        "address",
        "city",
        "zip",
        "telephone",
        "no_of_pieces",
        "total_weight",
        "height",
        "width",
        "depth",
        "commodity",
        "message",
    ];

}
