<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postagem;
use App\Models\User;

class postagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Postagem::with('user')->get();

        return view('feed', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação do texto e do arquivo de imagem (se enviado)
        $request->validate([
            'texto' => 'required|string|max:1055',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
        ]);

        $postagem = new postagem();
        $postagem->texto = $request->input('texto');
        $postagem->usuario_id = $request->user()->id;

        // Verifica se foi enviado um arquivo de imagem
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');

            // Verifica se o arquivo é válido
            if ($file->isValid()) {
                $fileName = uniqid() . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $path = $file->storeAs('public/Uploads/post', $fileName); // Salva o arquivo no diretório 'storage/app/public/Uploads'
                $postagem->imagem = 'storage/public/Uploads/post/' . $fileName; // Caminho correto para o arquivo
            }
        }

        $postagem->save();

        return redirect()->route("feed");
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
