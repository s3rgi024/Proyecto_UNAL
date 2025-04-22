<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class UsersHistory extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'fk_user_id',
        'field_modified',
        'last_value',
        'updated_value',
        'fk_updated_by'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'fk_user_id', 'id');
    }

    public function userReview(): BelongsTo{
        return $this->belongsTo(User::class, 'fk_updated_by', 'id');
    }
}
