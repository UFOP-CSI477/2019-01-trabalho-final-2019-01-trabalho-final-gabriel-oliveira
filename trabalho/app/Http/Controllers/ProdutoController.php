<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Avalia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{

  public function pesquisar(Request $request)
  {
    $prod = $request->query('produto');
    $plat = $request->query('filtrar');
    $ord = $request->query('ordenar');
    if ($ord == "precomaior") {
      $produtos = DB::table('produtos')->where('nome', 'like',  "%$prod%")->where('plataforma', 'like',  "%$plat%")->orderby('valor','desc')->get();
    }
    else if ($ord == "precomenor") {
      $produtos = DB::table('produtos')->where('nome', 'like',  "%$prod%")->where('plataforma', 'like',  "%$plat%")->orderby('valor','asc')->get();
    }
    else {
      $produtos = DB::table('produtos')->where('nome', 'like',  "%$prod%")->where('plataforma', 'like',  "%$plat%")->get();
    }

    return view('pesquisa_barra')->with('produtos', $produtos);

  }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
      if (Auth::check())
      {
      $users = Auth::user()->id;
      $avalias = DB::select('select avalias.nota as nota, avalias.texto as texto, users.name as user from avalias,users where users.id = user_id and produto_id = ?',[$produto->id]);
      return view('produtos.show')
          ->with('produtos', $produto)->with('users', $users)->with('avalias', $avalias);
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
