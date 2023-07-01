<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\celulares;

class celularescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $celulares = celulares::all();
        return view ('celulares.index')->with ('celulares',$celulares);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('celulares.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $celulares = new celulares();
        $celulares->codigo = $request->get('codigo');
        $celulares->marca = $request->get('marca');
        $celulares->imei = $request->get('imei');
        $celulares->modelo = $request->get('modelo');

        $celulares->save();
        return redirect('/celulares');
       
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
        $celulares = celulares::find($id);
        return view ('celulares.edit')->with ('celulares', $celulares);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $celulares = celulares::find($id);
        $celulares->codigo = $request->get('codigo');
        $celulares->marca = $request->get('marca');
        $celulares->imei = $request->get('imei');
        $celulares->modelo = $request->get('modelo');

        $celulares->save();
        return redirect('/celulares');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $celulares = celulares::find($id);
        $celulares -> delete();
        return redirect('/celulares');
    }
}
