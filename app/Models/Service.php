<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'type',
        'name',
        'description',
        'created_by',
        'updated_by',
    ];
}
