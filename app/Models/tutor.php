<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tutor extends Model{
    protected $table = 'tutores';

    public function preguntas():HasMany{
        return $this->hasMany(pregunta::class);

    }

    public function grupo():HasMany{
        return $this->hasMany(grupo::class);

    }
    
  



}
