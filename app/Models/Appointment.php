<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;

    public $table = 'appointment';

    public $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_date',
        'notes',
    ];

    public function doctor(): HasOne
    {
        return $this->hasOne(Doctor::class, 'id', 'doctor_id');
    }

    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class, 'id', 'patient_id');
    }

    public function getDateAttribute()
    {
        return (new \Carbon\Carbon($this->attributes['appointment_date']))->format('d M Y');
    }

    public function getTimeAttribute()
    {
        $time = (new \Carbon\Carbon($this->attributes['appointment_date']))->format('h:i A');
        if ($time === '12:00 AM') {
            return '-';
        }

        return $time;
    }

    public function getRemainingDaysAttribute()
    {
        return now()->diffInDays($this->attributes['appointment_date'], false) . ' days remaining';
    }
}
