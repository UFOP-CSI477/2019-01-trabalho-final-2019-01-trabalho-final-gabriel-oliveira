<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TelaController extends Controller
{
  public function ps4(Request $request)
  {
    $ord = $request->query('ordenar');
    if ($ord == "precomaior") {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%PS4%")->orderby('valor','desc')->get();
    }
    else if ($ord == "precomenor") {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%PS4%")->orderby('valor','asc')->get();
    }
    else {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%PS4%")->get();
    }

    return view('ps4')->with('produtos', $produtos);
  }

  public function xbox(Request $request)
  {
    $ord = $request->query('ordenar');
    if ($ord == "precomaior") {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%XBOX%")->orderby('valor','desc')->get();
    }
    else if ($ord == "precomenor") {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%XBOX%")->orderby('valor','asc')->get();
    }
    else {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%XBOX%")->get();
    }

    return view('xbox')->with('produtos', $produtos);
  }

  public function switch(Request $request)
  {
    $ord = $request->query('ordenar');
    if ($ord == "precomaior") {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%SWITCH%")->orderby('valor','desc')->get();
    }
    else if ($ord == "precomenor") {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%SWITCH%")->orderby('valor','asc')->get();
    }
    else {
      $produtos = DB::table('produtos')->where('plataforma', 'like',  "%SWITCH%")->get();
    }

    return view('switch')->with('produtos', $produtos);
  }
}
