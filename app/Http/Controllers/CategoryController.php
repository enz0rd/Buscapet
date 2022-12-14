<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add()
    {
        return view('cadastro_categorias');
    }
}
