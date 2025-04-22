<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DocumentType extends Model
{
    protected $fillable = [
        'abbreviation',
        'document_name'
    ];


    //Relationships
    public function users(): HasMany {
        return $this->hasMany(User::class, 'fk_type_dni', 'id');
    }
    
}
