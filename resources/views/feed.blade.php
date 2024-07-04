@extends('template.header')
@section('titulo')
    <title>feed</title>
    <link rel="stylesheet" href="{{ asset('assets/css/feed.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/postagem.css') }}">
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

                            <button type="submit">Publicar</button>

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
                                <button onclick="">Comentar</button>
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

    </div>
@endsection
