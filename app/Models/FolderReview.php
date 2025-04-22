<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FolderReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_folder_id',
        'fk_registered_state',
        'fk_updated_by',
        'comments'
    ];

    //*Relaciones
    public function teacherFiles(): BelongsTo {
        return $this->belongsTo(TeacherFolder::class, 'fk_folder_id', 'id');
    }

    public function folderState(): BelongsTo {
        return $this->belongsTo(FolderState::class, 'fk_registered_state', 'id');
    }

    public function users(): BelongsTo {
        return $this->belongsTo(User::class, 'fk_updated_by', 'id');
    }
}
