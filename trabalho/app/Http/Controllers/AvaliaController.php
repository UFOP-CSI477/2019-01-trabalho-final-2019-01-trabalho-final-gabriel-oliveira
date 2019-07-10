<?php

namespace App\Http\Controllers;

use App\Avalia;
use App\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AvaliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $avalias = DB::table('avalias')->where('user_id', '=',  $user)->get();
        return view('avalias.index')->with('avalias', $avalias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $prod = $request->query('produto_id');
      if (Auth::check()){
        return view('avalias.create')->with('prod',$prod);
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
      $prod = $request->query('produto_id');
      Avalia::create($request->all());
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Avalia  $avalia
     * @return \Illuminate\Http\Response
     */
    public function show(Avalia $avalia)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avalia  $avalia
     * @return \Illuminate\Http\Response
     */
    public function edit(Avalia $avalia)
    {
      return view('avalias.edit')
          ->with('avalia', $avalia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avalia  $avalia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avalia $avalia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avalia  $avalia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avalia $avalia)
    {
      $avalia->delete();
      return redirect()->route('avaliar.index');
    }
}
