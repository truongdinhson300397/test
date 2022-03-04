<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContractTerm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contract_term_id',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];
}
