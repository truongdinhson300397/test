<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoty',
        'type',
        'title',
        'contract_term_id',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
