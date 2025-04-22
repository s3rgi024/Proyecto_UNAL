<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'role_name'
    ];

    //*Relaciones
    public function users(): HasMany {
        return $this->hasMany(User::class, 'fk_role', 'id');
    }
}
