<?php

namespace App\Http\Controllers;

use App\Models\Client as Client;
use App\Http\Resources\Client as ClientResource;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::paginate(15);
        return ClientResource::collection($clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->nome = $request->input('nome');
        $client->cpf = $request->input('cpf');
        $client->estado = $request->input('estado');
        $client->cidade = $request->input("cidade");
        $client->endereco = $request->input("endereco");
        $client->cep = $request->input("cep");
        $client->telefone = $request->input("telefone");
        $client->celular = $request->input("celular");
        $client->email = $request->input("email");

        if( $client->save() ) {
            return new ClientResource($client);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return new ClientResource($client);
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
        $client = Client::findOrFail($id);
        $client->nome = $request->input('nome');
        $client->cpf = $request->input('cpf');
        $client->estado = $request->input('estado');
        $client->cidade = $request->input("cidade");
        $client->endereco = $request->input("endereco");
        $client->cep = $request->input("cep");
        $client->telefone = $request->input("telefone");
        $client->celular = $request->input("celular");
        $client->email = $request->input("email");

        if( $client->save() ) {
            return new ClientResource($client);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        if( $client->delete() ) {
            return new ClientResource($client);
        }
    }
}
