<?php

namespace App\Http\Controllers;

use App\Http\Requests\formLoginStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    return view('login', [
      'title' => 'Login'
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(formLoginStore $request)
  {

    if (Auth::attempt($request->safe()->only(['email', 'password']))) {
      $request->session()->regenerate();
      return back()->with('success', 'Logado com sucesso');
    } else {
      return back()->with('error', 'Erro ao realizar o login!')->withInput($request->only('email'));
    }

  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy()
  {

    Auth::logout();

    return back()->with('success', 'Deslogado com sucesso');

  }
}
