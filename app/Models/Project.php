<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function type(){
        return $this->belongsTo(Type::class); //nel model dipendente [1 tipo per progetto]
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class)->withTimestamps();
    }
}
