<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FolderState extends Model
{
    protected $fillable = [
        'folder_state_name'
    ];

    //*Relaciones

    public function folderReviews(): HasMany{
        return $this->hasMany(FolderReview::class, 'fk_registered_state', 'id');
    }

    public function teacherFolder(): HasMany{
        return $this->hasMany(TeacherFolder::class, 'fk_state', 'id');
    }
}
