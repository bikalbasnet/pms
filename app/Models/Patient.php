<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patient';

    protected $fillable = ['name', 'gender', 'email', 'address', 'phone', 'dob', 'notes', 'patient_id'];

    protected $appends = ['age'];

    public function getAgeAttribute()
    {
        return (new Carbon($this->attributes['dob']))->diffInYears(Carbon::now());
    }
}
