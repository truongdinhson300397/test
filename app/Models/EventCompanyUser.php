<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCompanyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_date_id',
        'company_id',
        'user_id',
        'visit_date',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
