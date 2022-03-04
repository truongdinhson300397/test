<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Authority extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'menu',
        'authority',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function admin() : BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function menu() : BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}
