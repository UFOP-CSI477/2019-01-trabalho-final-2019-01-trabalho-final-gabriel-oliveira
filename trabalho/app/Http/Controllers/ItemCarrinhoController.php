<?php

namespace App\Http\Controllers;

use App\ItemCarrinho;
use App\Produto;
use App\Carrinho;
use App\Compra;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ItemCarrinhoController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()){
        // $produto = Produto::all();
        // $user = User::all();
        // $item = ItemCarrinho::all();
        // $carrinho = Carrinho::all();
        $max = Compra::max('id');
        $item = DB::select('select DISTINCT item_carrinhos.id as id, item_carrinhos.quantia as quantia, item_carrinhos.valorU as valorU, item_carrinhos.valorT as valorT, produtos.nome as pnome, produtos.descricao as descr, produtos.plataforma as plat from item_carrinhos, carrinhos , produtos where produto_id = produtos.id and carrinho_id = ?' , [Auth::user()->id]);
        return view('carrinhos.index',['item'=>$item, 'compra'=>$max]);
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check()){
        return view('items.create');
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
        $item = new ItemCarrinho;
        $item->produto_id = $request->produto_id;
        $item->carrinho_id = Auth::user()->id;
        $item->quantia = $request->quantia;
        $item->valorU = $request->valorU;
        $item->valorT = $request->valorT;
        $item->save();
        return redirect()->route('carrinho');
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemCarrinho  $itemCarrinho
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCarrinho $itemCarrinho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemCarrinho  $itemCarrinho
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemCarrinho $itemCarrinho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemCarrinho  $itemCarrinho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCarrinho $itemCarrinho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemCarrinho  $itemCarrinho
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemCarrinho $itemCarrinho)
    {
      $item = App\ItemCarrinho::find($itemCarrinho);
      $item->delete();
      return redirect()->route('/home');
    }
}
