@extends('template.header')
@section('titulo')
    <title>Grupo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection
@section('left')

    <div class="left">
        <div class="profile">
            <img src="./img/friends1.jpg" alt="Imagem do Grupo" class="group-image">
            <h1>Nome do Grupo</h1>
            <p>Descrição do Grupo</p>
            <p></p>
            
            <button class="upload-button" onclick="addUpload()">Atualizar</button>
        </div>
        <div class="listaGrupos">
            
        </div>
        

    </div>

@endsection
@section('content')
<div class="main-content">
    
    <section class="posts">
        <div class="post-creation">
            <input type="text" placeholder="Pensando em alguma coisa para publicar?">
            <button class="post-btn" onclick="addPost()">Publicar</button>
        </div>
        <section class="files">
            <h2>Publicações do Grupo</h2>
                <div class="post">
                    <div class="post-header">Oscár de Carvalho</div>
                    <div class="post-content">This setup provides a foundation for the interface. 
                        You can expand on it by adding JavaScript to handle interactions like searching, posting updates, and more.</div>
                    <div class="post-actions">
                        <button>Gosto</button>
                        <button>Comentar</button>
                        <button>Partilhar</button>
                    </div>
                </div>
                <div class="post">
                    <div class="post-header">Odeth Miguel</div>
                    <div class="post-content">This setup provides a foundation for the interface. 
                        You can expand on it by adding JavaScript to handle interactions like searching, posting updates, and more.</div>
                    <div class="post-actions">
                        <button>Gosto</button>
                        <button>Comentar</button>
                        <button>Partilhar</button>
                    </div>
                </div>
                <!-- Publicações aqui -->
        </section>
        <section class="files">
            <h2>Arquivos Compartilhados</h2>
            <input type="file" id="file-input">
            <button onclick="uploadFile()">Carregar</button>
            <ul id="file-list">
                <!-- Arquivos aqui -->
            </ul>
        </section>
    </section>
    
</div>
@endsection
@section('rightContent')
<aside class="friends-list">
    <h3>Membros do Grupos</h3>
    <ul id="member-list">
        <li>Adilson Matungo (Administrador)</li>
        <li>João Victor (Membro)</li>
        <li>Victória Adão(Membro)</li>
        <li>Cabango Ndila (Membro)</li>
        <li>Massano de Joés Victor (Membro)</li>
        <li>Érica Eduardo (Membro)</li>
        <li>Adelina Silva Matos (Membro)</li>
        <li>Elton Santos Miguel (Membro)</li>
        <!-- Mais membros aqui -->
    </ul>
    <button class="addM-btn" onclick="addMember()">Adicionar Membro</button>
</aside>
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection
