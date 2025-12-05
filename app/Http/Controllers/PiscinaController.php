<?php

namespace App\Http\Controllers;

use App\Models\Piscina;
use Illuminate\Http\Request;

class PiscinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        Piscina::create([
            'nome' => $request->nome,
            'capacidade' => $request->capacidade,
            'agenda' => $request->agenda,
            'ativo'=> $request->has('ativo') ? 1 : 0
        ]);

        return redirect()->route('piscinas.index');
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
        $piscina = Piscina::findOrFail($id);

        return view('piscinas.update')
        ->with(['piscina' => $piscina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $piscina = Piscina::findOrFail($id);

        $piscina->update([
            'nome' => $request->nome,
            'capacidade' => $request->capacidade,
            'agenda' => $request->agenda,
            'ativo'=> $request->has('ativo') ? 1 : 0
        ]);

        return redirect()->route('piscinas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $piscina = Piscina::findOrFail($id);

        $piscina->delete();

        return redirect()->route('piscinas.index');
    }
}
