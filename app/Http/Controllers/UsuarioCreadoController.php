<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioCreadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $usuario = User::all(); 
        return view('usuario.index', ['users' => $usuario]);  
        // ->with('users',$usuario)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('usuario.create');
        // return redirect('/usuario');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $usuario = User::find($id);
        $usuario = User::findHashed($id);
        return view('usuario.edit')->with('usuarios',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::find($id); 
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->save();
        return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id); 
        $usuario->delete();
        return redirect('/usuario')->with('eliminar','ok');
    }

    public function canImpersonate() {
        return $this->id == 1;
    }

    public function canBeImpersonate() {
        return $this->id == 2;
    }

    // public function impersonate(User $usuario) {
    //     auth()->user()->impersonate($usuario);
    //     return redirect()->route('/usuario');
    // }

    // public function leaveimpersonate(User $usuario) {
    //     auth()->user()->impersonate($usuario);
    //     return redirect()->route('/usuario');
    // }

    
}
