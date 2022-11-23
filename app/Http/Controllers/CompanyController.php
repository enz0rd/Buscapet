<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $busca = request('search');
        return view('empresas', ['busca' => $busca]);
    }
    public function id($id)
    {
        return view('empresa', ['id' => $id]);
    }
}
