<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserRequestHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_user_id',
        'fk_state',
        'comments',
        'fk_reviewed_by'
    ];

    public function teacher(): BelongsTo{
        return $this->belongsTo(User::class, 'fk_user_id', 'id');
    }
 
    public function state(): BelongsTo{
        return $this->belongsTo(UserStates::class, 'fk_state', 'id');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'fk_reviewed_by', 'id');
    }
      
}
