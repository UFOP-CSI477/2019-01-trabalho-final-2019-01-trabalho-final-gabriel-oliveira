<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = ['total','itens'];

    public function User() {
      return $this->belongsTo('App\User');
    }

    public function ItemCompra(){
      return $this->hasMany('App\ItemCarrinho');
    }

}
