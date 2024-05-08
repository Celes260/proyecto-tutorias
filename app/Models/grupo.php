<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class grupo extends Model{
    protected $table = 'grupos';
    
    public function user():HasMany{
        return $this->hasMany(User::class);

    }

    public function tutor():BelongsTo{
        return $this->belongsTo(tutor::class);

    }

   
    
}
