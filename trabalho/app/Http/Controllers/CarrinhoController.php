<?php

namespace App\Http\Controllers;

use App\Carrinho;
use Illuminate\Http\Request;
use App\ItemCarrinho;
use App\Produto;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check()){
        $user = User::all();
        return view('carrinhos.index',['users'=>$user]);
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (Auth::check()){
          $item_carrinhos = ItemCarrinho::all();
          return view('carrinhos.index')
                  ->with('carrinhos', $item_carrinhos);
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function show(Carrinho $carrinho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrinho $carrinho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrinho $carrinho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrinho $carrinho)
    {
        //
    }
}
