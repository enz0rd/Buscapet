<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $busca = request('search');
        return view('servicos', ['busca' => $busca]);
    }

    public function show($id)
    {
        return view('servico', ['id' => $id]);
    }

    public function add()
    {
        return view('cadastro_servico');
    }
}
