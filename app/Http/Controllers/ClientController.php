<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
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
     * @param  StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {

        $validated = $request->validated();

        $client = new Client;

        $client->fill($validated);

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
     * @param  UpdateClientRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);

        $validated = $request->validated();

        $client->nome = $validated['nome'];
        $client->cpf = $validated['cpf'];
        $client->estado = $validated['estado'];
        $client->cidade = $validated['cidade'];
        $client->endereco = $validated['endereco'];
        $client->cep = $validated['cep'];
        $client->telefone = $validated['telefone'];
        $client->celular = $validated['celular'];
        $client->email = $validated['email'];

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
