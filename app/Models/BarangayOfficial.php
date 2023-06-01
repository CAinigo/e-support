<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangayOfficial extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_img',
        'lname',
        'fname',
        'mname',
        'sname',
        'zone',
        'gender',
        'contact',
        'email',
        'c_status',
        'bday',
        'position',
    ];
}
