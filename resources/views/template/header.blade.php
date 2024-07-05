<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('titulo')
    <link rel="stylesheet" href="assets/css/header.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        * {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>

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
                <a href="{{route('grupo')}}" class="group">
                    <div class="igroup">

                    </div>
                </a>
                <a href="{{route('chat')}}" class="chat">
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
            @yield('left')
            
            @yield('content')
            
            @yield('rightContent')
            
        </div>
    </div>
</body>

</html>
