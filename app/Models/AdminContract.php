<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'contract_id',
        'company_id',
        'contract_term_id',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function admin() : BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function contract() : BelongsTo
    {
        return $this->belongsTo(Contract::class);
    }
}
