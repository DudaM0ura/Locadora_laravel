<?php

namespace App\Http\Controllers;

use App\Models\Locadora;
use Illuminate\Http\Request;

class LocadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locadora=Locadora::get();
        return view('index', compact('locadora'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Locadora::create($request->all());
        return redirect()->route('index.locadora')->with('message', 'Novo filme adicionado!');
    }

    public function edit($id)
    {
        $locadora=Locadora::find($id);
        return view('edit', compact('locadora'))->with('message', 'Filme atualizado!');
    }

    public function update(Request $request, $id)
    {
        $locadora=Locadora::find($id);
        $locadora->update($request->all());
        return redirect()->route('index.locadora');
    }

    public function destroy($id)
    {
        Locadora::destroy($id);
        return redirect()->route('index.locadora')->with('message', 'Filme deletado!');
    }
}
