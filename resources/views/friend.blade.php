@extends('template.header')
@section('titulo')
    <title>Amigo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/amigo.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
@endsection
@section('left')

    <div class="left">
        <div class="person" style="background-image: url('{{ asset($user->fotoPerfil) }}');">

        </div>
        <h1 class="userName">{{ $user->name }}</h1>
        <p class="bio">{{ $user->biografia }}</p>
        <div class="iconsPerfil">
            <div class="iconP">
                <img src="./assets/img/icon/curso.svg" alt="">
                <p class="txtIcon">Curso: {{ $user->curso }}</p>
            </div>
            <div class="iconP">
                <img src="./assets/img/icon/ano.svg" alt="">
                <p class="txtIcon">Ano: {{ $user->ano }}</p>
            </div>
            <div class="iconP">
                <img src="./assets/img/icon/friendBlack.svg" alt="">
                <p class="txtIcon">Friend: </p>
            </div>
            <div class="iconP">
                <img src="./assets/img/icon/groupBlack.svg" alt="">
                <p class="txtIcon">Group: </p>
            </div>

        </div>

        <form action="{{route('login.destroy')}}" method="POST" >
            @csrf
            <button class="end" type="submit">Terminar sessão</button>
        </form>
        <br>
        <form action="{{route('cadastrar.edit')}}" method="POST">
            @csrf
            <button class="editar" type="submit">Editar</button>
        </form>

    </div>
    
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
