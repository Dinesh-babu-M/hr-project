<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_email',
        'hr_manager_name',
        'hr_manager_email',
        'hr_manager_phone',
        'roles', 
        'company_about',
    ];

    protected $casts = [
        'roles' => 'array', 
    ];
}
