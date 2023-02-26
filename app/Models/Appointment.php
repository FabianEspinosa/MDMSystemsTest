<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'PTNO',
        'CONTACT_NO',
        'APPOINMENT_DATE',
        'APPOINMENT_STATUS',
        'DURATION',
        'DOCTOR',
    ];

    protected $casts = [
        'APPOINMENT_DATE' => 'datetime',
    ];
}
