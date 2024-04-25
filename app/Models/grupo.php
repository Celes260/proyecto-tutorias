<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grupo extends Model{
    protected $table = 'grupos';
    
    public function user(){
        return $this->hasMany(User::class);

    }

    public function tutor(){
        return $this->belongsTo(tutor::class);

    }

   
    
}
