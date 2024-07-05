<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\amizade;
use App\Models\User;


class AmigoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

        $utilizadores = User::all();

        return view("friend", compact('user', 'utilizadores'));
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
        //
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

    // Enviar solicitação de amizade
    public function enviarSolicitacao($amigo_id)
    {
        $usuario = Auth::user();

        if ($usuario->id == $amigo_id) {
            return back()->with('error', 'Você não pode enviar uma solicitação de amizade para si mesmo.');
        }

        // Verifica se já existe uma solicitação de amizade pendente ou aceita entre os dois usuários
        $jaExistente = Amizade::where(function ($query) use ($usuario, $amigo_id) {
            $query->where('usuario1_id', $usuario->id)
                ->where('usuario2_id', $amigo_id);
        })->orWhere(function ($query) use ($usuario, $amigo_id) {
            $query->where('usuario1_id', $amigo_id)
                ->where('usuario2_id', $usuario->id);
        })->first();

        if ($jaExistente) {
            return back()->with('error', 'Já existe uma solicitação de amizade pendente ou aceita entre vocês.');
        }

        Amizade::create([
            'data_inicio' => now(),
            'usuario1_id' => $usuario->id,
            'usuario2_id' => $amigo_id,
            'status' => 'espera'
        ]);

        return back()->with('success', 'Solicitação de amizade enviada.');
    }

    // Aceitar solicitação de amizade
    public function aceitarSolicitacao($usuario_id)
    {
        $amizade = amizade::where('usuario1_id', $usuario_id)
            ->where('usuario2_id', Auth::id())
            ->first();

        if ($amizade) {
            $amizade->update(['status' => 'aceito']);
            return back()->with('success', 'Solicitação de amizade aceita.');
        }

        return back()->with('error', 'Solicitação de amizade não encontrada.');
    }

    // Recusar solicitação de amizade
    public function recusarSolicitacao($usuario_id)
    {
        $amizade = amizade::where('usuario1_id', $usuario_id)
            ->where('usuario2_id', Auth::id())
            ->first();

        if ($amizade) {
            $amizade->update(['status' => 'rejeitado']);
            return back()->with('success', 'Solicitação de amizade recusada.');
        }

        return back()->with('error', 'Solicitação de amizade não encontrada.');
    }
}
