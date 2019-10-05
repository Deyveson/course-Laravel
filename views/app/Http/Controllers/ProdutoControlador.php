<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function listar(){
        $produtoss = [
            "Notebook Asus i716 GB",
            "Mouse e Teclado Microsoft USB",
            "Monitor 21 - Sansung",
            "Impressora HP",
            "Disco SSD 512 GB"
        ];

        $produtos = [];
        return view('produtos', compact('produtos'));
    }
}
