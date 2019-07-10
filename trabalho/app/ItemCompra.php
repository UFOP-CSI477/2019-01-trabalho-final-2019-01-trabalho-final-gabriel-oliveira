<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCompra extends Model
{
  protected $fillable = ['produto_id','compra_id','quantia','valorU','valorT'];

  public function Compra() {
    return $this->belongsTo('App\Compra');
  }

  public function Produto() {
    return $this->belongsTo('App\Produto');
  }
}
