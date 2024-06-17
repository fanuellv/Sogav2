@extends('template.header')
@section('titulo')
<title>feed</title>
<link rel="stylesheet" href="./assets/css/feed.css">

@endsection

@section('content')
<div class="publicacion">
    <div class="txt">
        <button type="button" class="txtPublic" onclick="openModal()">Em que está pensando?</button>
    </div>
    <div class="container">
        <form action="" method="post" class="inputsP">
            <div class="inputs">
                <input type="button" id="image" name="image" accept="image/*" placeholder="imagem" onclick="openModal()">
                <label for="image" class="custom-file-upload">imagem</label>
            </div>
            <div class="inputs">
                <input type="button" value="" class="inputEvento" placeholder="Evento" id="evento" onclick="openModal()">
                <label for="evento" class="custom-file-upload">Evento</label>
            </div>
        </form>
    </div>
</div>

<div id="modal-bg" class="modal-bg" onclick="closeModal(event)">
    <div class="publicacion-modal" onclick="event.stopPropagation();">
      <form action="" method="post" class="forma">
        <h1>Criar publicação</h1>
        <input type="text" id="texto" placeholder="Em que está pensando?">
        <div class="inputs-modal">
          <label for="imagem-modal">Adicionar imagem</label>
          <input type="file" name="imagem-modal" id="imagem-modal">
        </div>
        <div class="inputs-modal">
          <input type="button" value="Criar Evento">
        </div>
        <button type="submit">Publicar</button>
      </form>
    </div>
</div>

<div class="post">
    
</div>


<script src="./assets/js/publicacion.js"></script>
@endsection