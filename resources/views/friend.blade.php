@extends('template.header')
@section('titulo')
    <title>Amigo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/amigo.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
@endsection
@section('content')
    <div class="friendInterface">
        <h1>Lista de usuários</h1>
        <div class="amigos">
            @foreach ($utilizadores as $utilizador)
                @if ($utilizador->fotoPerfil && $utilizador->name)
                    <div class="containerUser">
                        <div class="user">
                            <div class="userFoto" style="background-image: url('{{ asset($utilizador->fotoPerfil) }}');">
                            </div>
                            <p class="userName">{{ $utilizador->name }}</p>
                            <form action="{{ route('amigos.enviar', ['id' => $utilizador->id]) }}" method="POST">
                                @csrf
                                <button class="btnUser" type="submit">Enviar pedido</button>
                            </form>

                        </div>
                    </div>
                @endif
            @endforeach

        </div>
        <hr id="linha">
        <h1>Solicitações de Amizade Pendentes</h1>
        @foreach ($user->pendingFriendRequests() as $request)
            <div class="containerUser">
                @if ($request->initiator)
                    <div class="userFoto" style="background-image: url('{{ asset($request->initiator->fotoPerfil) }}');">
                    </div>
                    <p>{{ $request->initiator->name }}</p>
                    <form action="{{ route('amigos.aceitar', ['id' => $request->initiator->id]) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        <button class="btnAceitar" type="submit">Aceitar</button>
                    </form>
                    <form action="{{ route('amigos.recusar', ['id' => $request->initiator->id]) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        <button class="btnRecusar" type="submit">Recusar</button>
                    </form>
                @else
                    <p>Iniciador não encontrado.</p>
                @endif
            </div>
        @endforeach







    </div>
@endsection
