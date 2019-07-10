<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avalia extends Model
{
    protected $fillable = [ 'produto_id','user_id' ,'nota','texto' ];

    public function User() {
      return $this->belongsTo('App\User');
    }

    public function Produto() {
      return $this->belongsTo('App\Produto');
    }
}
