<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCarrinho extends Model
{
  protected $fillable = ['produto_id','carrinho_id','quantia','valorU','valorT'];

  public function Carrinho() {
    return $this->belongsTo('App\Carrinho');
  }

  public function Produto() {
    return $this->belongsTo('App\Produto');
  }

  
}
