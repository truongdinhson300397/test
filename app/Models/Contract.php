<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'contract_term_id',
        'dm',
        'dm_capacity',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function admin() : HasMany
    {
        return $this->hasMany(AdminContract::class);
    }
}
