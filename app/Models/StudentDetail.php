<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'batch_no',
        'reg_no',
        'course',
        'course_duration',
        'start_date',
        'stop_date',
        'passport',
        'signature',
        'qr_code',
    ];


    /** @use HasFactory<\Database\Factories\StudentDetailFactory> */
    use HasFactory;
}
