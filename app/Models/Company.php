<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'company_name',
        'logined_at',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
