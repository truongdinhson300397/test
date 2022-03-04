<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'entry_status',
        'participate_status',
        'memo',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
