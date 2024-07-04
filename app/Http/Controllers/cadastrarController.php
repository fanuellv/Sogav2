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

        $user = auth()->user();
        // Verifica se o objeto user é uma instância do modelo User
        if (!$user instanceof User) {
            $user = User::find(auth()->user()->id);
        }

        $user->dataNascimento = $request->dataNascimento;
        $user->municipio = $request->municipio;
        $user->bairro = $request->bairro;
        $user->femenino = $request->femenino;
        $user->masculino = $request->masculino;


        $file = $request->file('fotoPerfil');

        // Verifica se houve algum problema com o arquivo antes de tentar armazenar
        if ($file->isValid()) {
            $fileName = rand(0, 99999) . '-' . $file->getClientOriginalName();
            $path = $file->storeAs('public/Uploads', $fileName); // Salva o arquivo no diretório 'storage/app/public/Uploads'
            $user->fotoPerfil = 'storage/public/Uploads/' . $fileName; // Armazena o caminho relativo no banco de dados
        }

        $user->save();

        return redirect()->route('cadastro.end')->with('sucesso', 'Perfil atualizado com sucesso.');
    }
    public function storeBio(Request $request)
    {

        $user = auth()->user();
        // Verifica se o objeto user é uma instância do modelo User
        if (!$user instanceof User) {
            $user = User::find(auth()->user()->id);
        }

        $user->biografia = $request->biografia;

        $user->save();

        return redirect()->route('feed')->with('sucesso', 'Perfil atualizado com sucesso.');
    }

    /**
     * Display the specified resourc
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
        return redirect()->route('cadastro.perfil');
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
