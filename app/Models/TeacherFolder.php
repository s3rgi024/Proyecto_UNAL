<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeacherFolder extends Model
{
    protected $fillable = [
        'fk_teacher_id',
        'folder_name',
        'fk_state',
        'fk_updated_by'
    ];

    //*Relaciones

    public function fileState(): BelongsTo{
        return $this->belongsTo(FolderState::class, 'fk_state', 'id');
    }
    
    public function teacher(): BelongsTo{
        return $this->belongsTo(User::class, 'fk_teacher_id', 'id');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'fk_updated_by', 'id');
    }
    
    public function fileReviewsFolder(): HasMany{
        return $this->hasMany(FolderReview::class, 'fk_folder_id', 'id');
    }

    public function files() : HasMany{
        return $this->hasMany(TeacherFile::class, 'fk_folder_id','id');
    }
}
