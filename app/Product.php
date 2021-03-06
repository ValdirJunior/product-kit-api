<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name', 
        'description', 
        'price',
        'ml_categorie_id',
    ];

    public function kits()
    {
        return $this->belongsToMany('App\Kit');
    }
}
