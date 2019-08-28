<?php

namespace App\Http\Controllers;

class MeuControlador extends Controller
{
    public function getNome()
    {
        return "Deyveson Willian";
    }

    public function getIdade()
    {
        return "25";
    }

    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }

    public function getNomeByID($id)
    {
        $v = ['Deyveson', 'Willian', "Gomes", "Rodrigues"];
        if ($id >= 0 && $id < count($v)) {
            return $v[$id];
        }
        return 'Não encontrado';
    }
}

