<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerAndClient extends Model
{
    use HasFactory;

    protected $table = 'partner_and_clients';
    protected $fillable = ['name', 'type','image'];

    // Relation with Partner

}
