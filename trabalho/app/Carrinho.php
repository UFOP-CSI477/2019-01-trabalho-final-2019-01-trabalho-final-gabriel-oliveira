<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $fillable = ['total','itens'];

    public function User() {
      return $this->belongsTo('App\User');
    }

    public function ItemCarrinho(){
      return $this->hasMany('App\ItemCarrinho');
    }

}
