<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mensaje;
use App\Bandeja;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('NewMessage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request('archivo')) {
            $adj = $request->file('archivo')->store('public');
        }else{
            $adj =null;
        }
        $ml = preg_split("[,]", $request->email);
        foreach ($ml as $emailItem) {
                mensaje::create([
                    'asunto' => request('asunto'),
                    'mensaje' => request('mensaje'),
                    'adjunto' => $adj,
                    'prioridad' => request('prioridad'),
                    'leido'=> 0,
                    'co' => request('emailO'),
                    'cd' => $emailItem,
                    'enviado' => date('Y-m-d H:i:s')
                ]);
        }

        return redirect()->route('home');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = mensaje::find($id);
        return view('VerMensaje')->with('mensaje', $mensaje);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
