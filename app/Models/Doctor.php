<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public $table = 'doctor';

    public $fillable = [
        'name',
        'registration_number',
        'specialization',
        'phone',
        'email',
        'address',
        'notes',
    ];
}
