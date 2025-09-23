<?php

namespace App\Http\Controllers;

use App\Models\Faust;
use Illuminate\Http\Request;

class FaustController extends Controller
{
    public function index()
    {
        $cads= Faust::all();
        return view('index', compact(  'cads'));
    }

    public function create()
    {
        return view('create');
    }
    
    public function show($id)
    {
        $cad=Faust::findOrFail($id);
        return view('show', ['cad'=>$cad]);
    }


    public function store(Request $request)
    {
        $request->validate([
            "email"=> "required"
        ]);
        
        $cads = Faust::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->route('index', ["cads"=>$cads])->with('success', 'Registro criado com sucesso!!');
    }

    public function edit($id)
    {
        $cad = Faust::findOrFail($id);
        return view('edit',["cad"=>$cad]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            "email"=> "required"
        ]);
        
        $cad = Faust::findOrFail($id);
        $cad->update([
            'email' => $request->input('email'),
        ]);
        return redirect()->route('show', ["id"=>$cad->id])->with('success', 'Registro editado com sucesso!!');    
    }

    public function destroy($id)
    {
        $cad = Faust::findOrFail($id);
        $cad->delete();

        return redirect()->route('index')->with('success', 'Registro apagado com sucesso!!');
        
    }
}