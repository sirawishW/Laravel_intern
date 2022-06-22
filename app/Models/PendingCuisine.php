<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingCuisine extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameEN',
        'nameTH',
        'user',
        'nationality',
        'description',
        'image'
    ];
}
