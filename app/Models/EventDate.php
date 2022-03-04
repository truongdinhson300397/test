<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'event_date',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
