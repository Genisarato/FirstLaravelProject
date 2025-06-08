<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class ClientController extends Controller
{
    // Llistar tots els clients
    public function index(): JsonResponse
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    // Mostrar un client per ID (Route Model Binding)
    public function show(Client $client): JsonResponse
    {
        return response()->json($client);
    }

    // Crear un client nou
    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'telefon' => 'required|string|max:20', // corregit 'teléfono' per 'telefono' (sense accents a les claus)
            'edat' => 'nullable|integer',
        ]);

        $client = Client::create($validatedData);

        return response()->json($client, 201);
    }
}
