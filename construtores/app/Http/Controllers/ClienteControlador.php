<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Lista de todos os Cliente - Raiz";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Formulario para Cadastrar novo Cliente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $s = 'Armazenar: ';
//        $s .= 'Nome: ' . $request->input('nome') . ' e ';
//        $s .= 'Idade: ' . $request->input('idade');

        $s = "Armazenar = Nome: {$request->input('nome')} Idade: {$request->input('idade')}";

        // Duas maneiras de concatenação

        return response($s, 201);
        //retornando um response com o codigo 201 (Created)
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $v = ['Deyveson', 'Willian', "Gomes", "Rodrigues"];
        if ($id >= 0 && $id < count($v)) {
            return $v[$id];
        }
        return 'Não encontrado';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Formulario para Editar Cliente com ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s = "Atualizar Cliente com id $id :";
        $s .= "Nome: " . $request->input('nome') . " e ";
        $s .= "Idade: " . $request->input('idade');
        return response($s, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response("Apagago cliente com ID: $id", 200);
    }

    public function requisitar(Request $request)
    {
        echo "nome: " . $request->input('nome');
    }
}
