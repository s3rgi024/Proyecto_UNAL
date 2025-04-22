<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FileType extends Model
{
    protected $fillable = [
        'file_name',
        'fk_folder_type'
    ];

    public function folderType(): BelongsTo {
        return $this->belongsTo(FolderType::class, 'fk_folder_type', 'id');
    }
}
