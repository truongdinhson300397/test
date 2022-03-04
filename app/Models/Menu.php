<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_name',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function adminClassMenus() : HasMany
    {
        return $this->hasMany(AdminClassMenu::class);
    }

    public function authorities() : HasMany
    {
        return $this->hasMany(Authority::class);
    }
}
