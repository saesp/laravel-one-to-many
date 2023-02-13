<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;


    // PersonDetails (ONE TO ONE RELATION)
    public function personDetail(){
        return $this -> hasOne(PersonDetail::class);
    }
    
    // Posts (ONE TO MANY RELATION)
    public function post(){
        return $this -> hasMany(Post::class);
    }
}
