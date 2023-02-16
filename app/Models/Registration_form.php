<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'Student_name',
        'Middle_name' ,
        'Last_name' ,
        'Father_name',
        'Mother_name',
        'ID_Number' ,
        'BirthMonth' ,
        'BirthDay',
        'Gender',
        'choose_file',
        'Religion' ,
        'Department',
        'Phone_no',
        'Present_Address' ,
        'Permanent_Address',
    ];
}
