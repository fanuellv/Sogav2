<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class cadastrarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cadastrar');
    }
    public function createPerfil()
    {
        //
        return view('cadastroPerfil');
    }
    public function createBio()
    {
        //
        return view('cadastrarEnd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->numero = $request->numero;
        $user->password = bcrypt($request->password);
        $user->curso = $request->curso;
        $user->ano = $request->ano;
        $user->save();

        return redirect()->route('cadastro.perfil')->with('sucesso', 'Usuario criado com sucesso.');

    }
    public function storePerfil(Request $request)
{
    // Verificar se o usuário está autenticado
    if (!auth()->check()) {
        return redirect()->route('login'); // Redirecionar para a página de login, por exemplo
    }

    // Assume the user is already authenticated and the userId is obtained from the session or authentication
    $userId = auth()->user()->id;

    $user = User::findOrFail($userId);
    $user->dataNascimento = $request->dataNascimento;
    $user->municipio = $request->municipio;
    $user->bairro = $request->bairro;
    $user->femenino = $request->masculino;
    $user->masculino = $request->femenino;

    if ($request->hasFile('fotoPerfil')) {
        $imageName = time() . '.' . $request->fotoPerfil->extension();
        $request->fotoPerfil->move(public_path('uploads'), $imageName);
        $user->fotoPerfil = $imageName;
    }

    $user->save();

    return redirect()->route('cadastro.end')->with('sucesso', 'Usuário criado com sucesso.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
