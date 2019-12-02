<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    public function categorie()
    { 
      return $this->belongsTo(categorie::class); 
    }
}
