<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;

public function books()
{
    return $this->belongsTo('App/Models/Book');
}

public function shelves()
{
    return $this->belongsTo('App/Models/Shelve');
}
}
