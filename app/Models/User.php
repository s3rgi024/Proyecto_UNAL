<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fk_type_dni',
        'dni',
        'first_name',
        'second_name',
        'first_surname',
        'second_surname',
        'email',
        'email_verified_at',
        'phone',
        'fk_role',
        'banned_at',
        'password',
        'fk_state',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //*Relaciones
    public function documentType(): BelongsTo {
        return $this->belongsTo(DocumentType::class, 'fk_type_dni', 'id');
    }
    
    public function role(): BelongsTo {
        return $this->belongsTo(Role::class, 'fk_role', 'id');
    }

    public function state(): BelongsTo {
        return $this->belongsTo(UserState::class, 'fk_state', 'id');
    }

    public function folderReviews(): HasMany {
        return $this->hasMany(FolderReview::class, 'fk_updated_by', 'id');
    }

    public function userRequestHistory(): HasMany{
        return $this->hasMany(UserRequestHistory::class, 'fk_user_id', 'id');
    }

    public function userReviewRequestHistory(): HasMany{
        return $this->hasMany(UserRequestHistory::class, 'fk_reviewed_by', 'id');
    }

    public function userHistory(): HasMany{
        return $this->hasMany(UsersHistory::class, 'fk_user_id', 'id');
    }

    public function userReviewHistory(): HasMany{
        return $this->hasMany(UsersHistory::class, 'fk_updated_by', 'id');
    }

    public function folder(): HasOne{
        return $this->hasOne(TeacherFolder::class, 'fk_teacher_id', 'id');
    }

    public function folderReview(): HasMany{
        return $this->hasMany(TeacherFolder::class, 'fk_updated_by', 'id');
    }

    public function files() : HasMany{
        return $this->hasMany(TeacherFile::class, 'fk_updated_by', 'id');
    }
}
