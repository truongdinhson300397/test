<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\AdminClassMenu
 *
 * @property-read \App\Models\Admin $admin
 * @property-read \App\Models\Menu $menu

 * @mixin \Eloquent
 */
class AdminClassMenu extends Model
{
    use HasFactory;

    protected $table = 'admin_class_menu';

    protected $fillable = [
        'admin_class',
        'menu_id',
        'is_visible',
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
