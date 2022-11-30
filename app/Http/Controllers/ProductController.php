<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $busca = request('search');
        return view('produtos', ['busca' => $busca]);
    }

    public function add()
    {
        return view('cadastro_produto');
    }
}
