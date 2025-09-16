<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{
    public function getProdutos()
    {
        // A sua URL da API de produtos em Java
        $javaApiUrl = 'http://localhost:8081/api/produtos';

        // Faz a chamada para a sua API em Java
        $response = Http::get($javaApiUrl);

        // Se a requisição for bem-sucedida (código 200 OK)
        if ($response->successful()) {
            return response()->json($response->json());
        }

        // Se a requisição falhou, retorne o erro
        return response()->json([
            'error' => 'Não foi possível se conectar à API de produtos em Java.'
        ], $response->status());
    }
}
