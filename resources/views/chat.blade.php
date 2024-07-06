@extends('template.header')
@section('titulo')
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
@endsection
@section('left')
    <div class="contact-list">
        <h1>Chat - Soga</h1>
        <div class="contacts">
            @foreach ($user->friends() as $friend)
                    <a href="">
                        <div class="containerUser">
                            <div class="userFoto" style="background-image: url('{{ asset($friend->fotoPerfil) }}');">
                            </div>
                            <p>{{ $friend->name }}</p>
                        </div>
                    </a>
                @endforeach
        </div>
    </div>
@endsection
@section('content')
    <!-- Mensagens do Chat -->
    <div class="chat-messages">
        <div class="sms">

        </div>
        <!-- Input para nova mensagem -->
        <div class="grupo-input">
            <input type="text" class="form-control" placeholder="Type your message...">
            <button class="enviar-btn">Enviar</button>
        </div>
    </div>
    </div>
@endsection
