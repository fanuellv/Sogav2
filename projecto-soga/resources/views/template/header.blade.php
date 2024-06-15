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
                <a href="../feed" class="feed">
                    <div  class="ifeed">

                    </div>
                </a>
                <a href="../feed" class="friend">
                    <div  class="ifriend">

                    </div>
                </a>
                <a href="../feed" class="group">
                    <div  class="igroup">

                    </div>
                </a>
                <a href="../feed" class="chat">
                    <div  class="ichat">

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
                <div class="person">
                    <img src="" alt="" class="userPhoto">
                </div>
                <h1 class="userName">User name</h1>
                <p class="bio">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor facere provident exercitationem eligendi adipisci ipsum, alias saepe dicta perspiciatis iure libero quasi expedita animi, odit enim. Saepe officiis autem soluta?</p>
                <div class="iconsPerfil">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
             
                <button>Editar</button>
                <button>Terminar sessão</button>
                    
            </div>
            <div class="center"
            ></div>
            <div class="right">

            </div>
        </div>
    </div>
</body>
</html>