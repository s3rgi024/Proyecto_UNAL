<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class UserState extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_state_name'
    ];

    public function users(): HasMany{
        return $this->hasMany(User::class, 'fk_state', 'id');
    }

    public function usersRequests(): HasMany{
        return $this->hasMany(UserRequestHistory::class, 'fk_state_id', 'id');
    }
}
