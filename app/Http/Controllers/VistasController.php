<?php

namespace App\Http\Controllers;

use App\Vista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vistas = Auth::user()->vistas;

        return view('vistas.list', ['vistas' => $vistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $vista = new Vista([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'date' => $request->get('date'),
            'hash' => substr(uniqid(), -7),

        ]);
        $vista->save();
        return redirect('vistas/' . $vista->hash);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function show(Vista $vista)
    {

        return view('vista', ['vista' => $vista] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function edit(Vista $vista)
    {
        return view('vistas.edit', ['vista' => $vista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vista $vista)
    {
        $vista->title = request('title');
        $vista->body = request('body');
        $vista->date = request('date');
        $vista->save();
        return redirect('vistas/'.$vista->hash);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vista  $vista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vista $vista)
    {
        $vista->delete();
        return redirect('vistas');
    }
}
