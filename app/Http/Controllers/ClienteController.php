<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use DB;
use File;

class ClienteController extends Controller
{
    public function index() {
    	$clientes = Cliente::all();
    	return view('lista-clientes', compact('clientes'));
    }

    public function create() {
    	return view('incluir-cliente');
    }

    public function store(Request $request) {

    	//Cliente::create($request->all());
    	$cliente = new Cliente;
    	$cliente->nome = $request->nome;
    	$cliente->email = $request->email;
    	$cliente->descricao = $request->descricao;
        // Define um aleatório para o arquivo baseado no timestamps atual
        $nomeimg = uniqid(date('HisYmd'));
        // Recupera a extensão do arquivo
        $extensaoimg = $request->imagem->extension();
        // Define finalmente o nome
        $nomeFile = "{$nomeimg}.{$extensaoimg}";
        // Faz o upload:
        $upload = $request->imagem->storeAs('clientes', $nomeFile);
        $cliente->imagem = $upload;
    	$cliente->save();
    	return redirect()->route('cliente.index')->with('message', 'Cliente criado com sucesso!');
    }

    public function show($id) {
    }

    public function pesquisar(Request $request) {
        $pesquisar = $request->get('pesquisar');
        $clientes = DB::table('clientes')->where('nome', 'like', '%'.$pesquisar.'%')->paginate(5);
        return view('lista-clientes', ['clientes' => $clientes]);
    }

    public function edit($id) {
    	$cliente = Cliente::findOrFail($id);
    	return view('alterar-cliente', compact('cliente'));
    }

    public function update(Request $request, $id) {
    	//$cliente = Cliente::find($id)->update($request->all());
        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->descricao = $request->descricao;
        if($request->hasFile('imagem')) {
        Storage::delete($cliente->imagem);
        // Define um aleatório para o arquivo baseado no timestamps atual
        $nomeimg = uniqid(date('HisYmd'));
        // Recupera a extensão do arquivo
        $extensaoimg = $request->imagem->extension();
        // Define finalmente o nome
        $nomeFile = "{$nomeimg}.{$extensaoimg}";
        // Faz o upload:
        $upload = $request->imagem->storeAs('clientes', $nomeFile);
        $cliente->imagem = $upload;
        }
        

        $cliente->update();
    	return redirect()->route('cliente.index')->with('message', 'Cliente alterado com sucesso!');
    }

    public function destroy($id) {
    	$cliente = Cliente::findOrFail($id);
    	$cliente->delete();
    	return redirect()->route('cliente.index')->with('message', 'Cliente excluido com sucesso!');
    }
}
