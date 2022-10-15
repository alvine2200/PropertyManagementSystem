<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lease_status',
        'location',
        'pricing',
        'start_date',
        'end_date'
    ];

    protected $table='properties';
}
