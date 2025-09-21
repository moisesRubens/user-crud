<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //é um display pra ver todos
    public function index()
    {
        $alunos_c = Aluno::all();
        return view('index', compact('alunos_c'));
    }

    /**
     * Show the form for creating a new resource.
     */
    //display de interação com o usuário
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    //método de backend pra criar, atua debaixo do create
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    //display pra mostrar um e não todos
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //display de interação com o usuário pra editar 
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    //método de backend que atua debaixo do edit
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    //método de backend que atua debaixo do mini-display de delete, que é internos a outros displays
    public function destroy(string $id)
    {
        //
    }
}
