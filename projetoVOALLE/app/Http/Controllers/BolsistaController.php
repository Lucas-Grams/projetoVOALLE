<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bolsista;

class BolsistaController extends Controller
{
    public function index(){
        $bolsistas = Bolsista::all();

        return view('welcome', ['bolsistas' => $bolsistas]);
    }

    public function create(){
        return view('/events/register');
    }

    public function store(Request $request){
        
        $bolsista = new Bolsista();
        $bolsista->nome = $request->nome;
        $bolsista->email = $request->email;
        $bolsista->cpf = $request->cpf;
        $bolsista->funcao = $request->funcao;
        $bolsista->status = $request->status;

        $bolsista->save();
        return redirect('/');
    }

    public function show($id){

        $bolsista = Bolsista::findOrFail($id);

        return view('/events/show',['bolsista' => $bolsista]);
    }

    public function destroy($id){
        $bolsista = Bolsista::findOrFail($id);
        $bolsista->delete();
        return redirect('/');
    }
    
}
