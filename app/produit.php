<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
  protected $fillable  = ['nom','imagepro','description'];
    public function categorie()
    { 
      return $this->belongsTo(categorie::class); 
    }
}
