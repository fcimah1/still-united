<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $tables = 'services';
    protected $fillable = [
        'name',
        'short_desc',
        'long_desc',
        'image',
    ];
}
// name	short_desc	long_desc	image