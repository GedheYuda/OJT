<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];
    protected $table="product";
    protected $fillable = [
        "id","price","file","type"
    ];
}
