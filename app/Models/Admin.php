<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'admin_class',
        'is_super_admin',
        'logined_at',
    ];

    public function adminClassMenus() : HasMany
    {
        return $this->hasMany(AdminClassMenu::class);
    }

    public function adminContracts() : HasMany
    {
        return $this->hasMany(AdminContract::class);
    }

    public function authorities() : HasMany
    {
        return $this->hasMany(Authority::class);
    }
}
