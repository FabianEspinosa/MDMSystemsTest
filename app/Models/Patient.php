<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'TYPE',
        'PTNO',
        'SALUTATION',
        'PATIENT_NAME',
        'GENDER',
        'NATIONALITY',
        'REGION',
        'REGISTRED_DATE',
        'EDIT_DATE',
    ];

    protected $casts = [
        'REGISTRED_DATE' => 'datetime',
        'EDIT_DATE' => 'datetime',
    ];
}
