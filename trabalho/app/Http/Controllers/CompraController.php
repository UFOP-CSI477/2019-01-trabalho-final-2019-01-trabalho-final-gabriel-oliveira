<?php

namespace App\Http\Controllers;

use App\ItemCompra;
use App\Compra;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user()->id;
      $compras = DB::table('compras')->where('user_id', '=',  $user)->get();
      return view('compras.index')
              ->with('compras', $compras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check()){
        return view('compras.create');
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
        Cliente::create($request->all());
        return redirect()->route('admin.index');
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemCompra  $itemCompra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
      if (Auth::check()){
        $item = DB::select('select DISTINCT item_compras.id as id, item_compras.quantia as quantia, item_compras.valorU as valorU, item_compras.valorT as valorT, produtos.nome as pnome, produtos.descricao as descr, produtos.plataforma as plat from item_compras, compras , produtos where produto_id = produtos.id and compra_id = ?' , [$compra->id]);
        return view('compras.show',['item'=>$item]);
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemCompra  $itemCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemCompra $itemCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemCompra  $itemCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCompra $itemCompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemCompra  $itemCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemCompra $itemCompra)
    {
        //
    }
}
