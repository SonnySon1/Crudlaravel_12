<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    // tabel name
    protected $table = "clases";

    // fillable tabel column  
    protected $guarded = [];

    // relation one-to-many 
    public function user(){
        return $this->hasMany(User::class, 'clas_id');
    }
}
