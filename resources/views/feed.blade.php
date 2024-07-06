@extends('template.header')
@section('titulo')
    <title>feed</title>
    <link rel="stylesheet" href="{{ asset('assets/css/feed.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/postagem.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        * {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
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
    <div class="centerCenter">
        <div class="center">

            <div class="content">
                <div class="publicacion">
                    <div class="txt">
                        <button type="button" class="txtPublic" onclick="openModal()">Em que está pensando?</button>
                    </div>
                    <div class="container">
                        <form action="" method="post" class="inputsP">
                            <div class="inputs">
                                <input type="button" id="image" name="image" accept="image/*" placeholder="imagem"
                                    onclick="openModal()">
                                <label for="image" class="custom-file-upload">imagem</label>
                            </div>
                            <div class="inputs">
                                <input type="button" value="" class="inputEvento" placeholder="Evento" id="evento"
                                    onclick="openModal()">
                                <label for="evento" class="custom-file-upload">Evento</label>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="modal-bg" class="modal-bg" onclick="closeModal(event)">
                    <div class="publicacion-modal" onclick="event.stopPropagation();">
                        <form action="{{ route('CriarPostagem') }}" method="post" class="forma"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="texto">Criar publicação</label>
                            <input type="text" id="texto" name="texto" placeholder="Em que está pensando?">
                            <div class="inputs-modal">
                                <label for="imagem-modal">Adicionar imagem</label>
                                <input type="file" name="imagem" id="imagem-modal">
                            </div>

                            <button type="submit" class="btnP">Publicar</button>

                        </form>
                    </div>
                </div>

                <div class="post">
                    @foreach ($posts as $posts)
                        <div class="postItem">
                            <div class="topPost">
                                @if ($posts->user)
                                    <div class="fotoPost"
                                        style="background-image: url('{{ asset($posts->user->fotoPerfil) }}');"></div>
                                    <p class="userNamePost">{{ $posts->user->name }}</p>
                                @else
                                    <p class="userNamePost">Usuário não encontrado</p>
                                @endif
                            </div>
                            <p>{{ $posts->texto }}</p>
                            @if ($posts->imagem)
                                <div class="imagemPost" style="background-image: url('{{ asset($posts->imagem) }}');">

                                </div>
                            @endif
                            <hr>
                            <div class="downPost">
                                <button onclick="">Gosto</button>
                                <button onclick="mostrarComentario()">Comentar</button>
                                <button onclick="">Partilhar</button>
                            </div>
                            

                        </div>
                    @endforeach
                </div>


                <script src="{{ asset('assets/js/publicacion.js') }}"></script>

            </div>
        </div>
    </div>
@endsection
@section('rightContent')
    <div class="right">
        <div class="grupo">
            <form action="{{ route('grupo.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h1>Criar Grupo</h1>
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="campo">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" rows="3" required></textarea>
                </div>
                <div class="campo">
                    <label for="foto">Selecione uma foto</label>
                    <input type="file" name="foto" id="foto" accept="image/*">
                </div>

                <button type="submit">Criar</button>
            </form>
        </div>
        <div class="amigos">
            <hr id="linha">
            <h1>Lista de amigos</h1>
            @foreach ($user->friends() as $friend)
                <div class="containerUser">
                    <div class="userFoto" style="background-image: url('{{ asset($friend->fotoPerfil) }}');">
                    </div>
                    <p>{{ $friend->name }}</p>
                </div>
            @endforeach

        </div>

    </div>
@endsection
