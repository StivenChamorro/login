<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelve extends Model
{
    use HasFactory;

public function libraries()
{
    return $this->belongsTo('App/Models/Library');
}

public function topics()
{
    return $this->belongsTo('App/Models/Topic');
}

public function copies()
{
    return $this->hasMany('App/Models/Copy');
}

}
