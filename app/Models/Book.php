<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_publication',
        'author_id'
    ];

    public function authors(){
        return $this->belongsTo('App\Models\Author'); 
    }

    public function copies()
{
    return $this->hasMany('App/Models/Copy');
}
}
