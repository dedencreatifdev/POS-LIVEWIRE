<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use HasFactory, Notifiable, HasUuids;
    protected $guarded = [];


    /**
     * Get the user that owns the Menu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relMenu(): HasMany
    {
        return $this->HasMany(Menu::class, 'menu_id', 'id');
    }

    public function relSubMenu(): HasMany
    {
        return $this->HasMany(Menu::class, 'submenu_id', 'id');
    }
}
