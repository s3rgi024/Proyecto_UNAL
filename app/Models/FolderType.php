<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FolderType extends Model
{
    protected $fillable = [
        'folder_name'
    ];
    public function fileType(): HasMany {
        return $this->hasMany(FileType::class, 'fk_folder_type', 'id');
    }
}
