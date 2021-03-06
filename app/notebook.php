<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notebook extends Model
{
    //to prevent MassAssingment error
    protected $fillable = ['title', 'description'];

    public function notes(){
      return $this->hasMany(Note::class);
    }

    public function users(){
      return belongsTo(User::class);
    }
}
