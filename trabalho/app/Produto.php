<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

  protected $fillable = ['nome','descricao','valor','img','plataforma'];

  public function ItemCarrinho(){
    return $this->hasMany('App\ItemCarrinho');
  }
  public function ItemCompra(){
    return $this->hasMany('App\ItemCompra');
  }
  public function Avalia(){
    return $this->hasMany('App\Avalia');
  }
}
