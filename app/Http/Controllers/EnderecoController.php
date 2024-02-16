<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvarRequest;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();
        return view('listaCeps', compact('enderecos'));
    }

    public function adicionarCep()
    {
        return view(view: 'novoCep');
    }

    public function buscarCep(Request $request)
    {
        $cep = $request->input('cep');
        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json/')->json();

        return view('buscaCep')->with(
            [
                'cep'=> $cep,
                'logradouro' => $response['logradouro'],
                'bairro' => $response['bairro'],
                'cidade' => $response['localidade'],
                'estado' => $response['uf'],
            ]
        );
    }

    public function salvar(SalvarRequest $request)
    {   

        $enderecoExistente = Endereco::where('cep', $request->input('cep'))->first();

        if ($enderecoExistente) {
            return redirect()->route('cadastro')->withErrors(['cep' => 'CEP já cadastrado.'])->withInput();
        }else{
            Endereco::create([
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'numero' => $request->input('numero'),
                'bairro' => $request->input('bairro'),
                'cidade' => $request->input('cidade'),
                'estado' => $request->input('estado')
            ]);
            return redirect()->route('home')->with('success', 'Endereço cadastrado com sucesso.');
        }
    }

}
