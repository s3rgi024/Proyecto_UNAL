<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeacherFile extends Model
{
    protected $fillable = [
        'fk_folder_id',
        'fk_file_type',
        'fk_updated_by'
    ];

    public function folder() : BelongsTo{
        return $this->belongsTo(TeacherFolder::class, 'fk_folder_id','id');
    }

    public function fileType() : BelongsTo{
        return $this->belongsTo(FileType::class, 'fk_file_type','id');
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class, 'fk_updated_by', 'id');
    }

}
