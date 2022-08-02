<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'enrollment_year',
        'dob',
        'gender',
        'residential_status',
        's_m_school',
        's_m_school_year_level',
        's_p_school',
        'residential_address',
        'suburb',
        'postcode',
        'father_name',
        'father_home_phone',
        'father_mobile_phone',
        'father_email',
        'mother_name',
        'mother_home_phone',
        'mother_mobile_phone',
        'mother_email',
        'emergency_contact_name',
        'emergency_contact_relation',
        'emergency_contact_phone',
        'medical_conditon',
        'medical_condition_details',
        'photo_permissoin',
        'parent_agreement',
        'paid',
        'receipt',
    ];
}
