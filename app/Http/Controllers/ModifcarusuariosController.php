<?php

namespace App\Http\Controllers;

use App\modifcarusuarios;
use Illuminate\Http\Request;

class ModifcarusuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $usuarios =  modifcarusuarios::get();
        return view('modificar')->with('usuarios', $usuarios);
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
     * @param  \App\modifcarusuarios  $modifcarusuarios
     * @return \Illuminate\Http\Response
     */
    public function show(modifcarusuarios $modifcarusuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modifcarusuarios  $modifcarusuarios
     * @return \Illuminate\Http\Response
     */
      public function edit($id)
    {
        $usuarios = modifcarusuarios::find($id);
        return view('edit')->with('usuarios',$usuarios);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modifcarusuarios  $modifcarusuarios
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
    {
        $usuarios = modifcarusuarios::find($id);
        $usuarios->name = $request->input('name');
        $usuarios->email  = $request->input('email');

        $usuarios->rol  = $request->input('rol');
        $usuarios->save();
        return redirect()->route('modificar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modifcarusuarios  $modifcarusuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { $coronacase = modifcarusuarios::findOrFail($id);
        $coronacase->delete();

        return redirect('modificar');
    }
}
