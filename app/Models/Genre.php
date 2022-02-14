<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function records()
    {
    return $this->hasMany('App\Record');   // genre has multiple record
        // return $this->>belongsTo('App\Genre')->withDefault();  //record belongs to a genre
}
}
