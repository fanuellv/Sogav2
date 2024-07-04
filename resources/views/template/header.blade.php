<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('titulo')
    <link rel="stylesheet" href="assets/css/header.css">

</head>

<body>
    <div class=".principal">
        <header class="top">
            <div class="logo">
                <img src="assets/img/soga.svg" alt="">
            </div>

            <div class="icon">
                <a href="{{route('feed')}}" class="feed">
                    <div class="ifeed">

                    </div>
                </a>
                <a href="{{route('amigo')}}" class="friend">
                    <div class="ifriend">

                    </div>
                </a>
                <a href="../feed" class="group">
                    <div class="igroup">

                    </div>
                </a>
                <a href="../feed" class="chat">
                    <div class="ichat">

                    </div>
                </a>

            </div>
            <div class="search">
                <a href="">
                    <div class="lupa"></div>
                </a>
                <input type="text" class="txtSearch" placeholder="pesquisa">
            </div>

        </header>
        <div class="conteiner">
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
            @yield('content')
            
            @yield('rightContent')
            
        </div>
    </div>
</body>

</html>
