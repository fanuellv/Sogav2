<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    </style>
</head>
<body>
    <div class="principal">
        <div class="left">
            <img src="./assets/img/img-login.svg" alt="" width="500px" class="">
        </div>
        <div class="right">
            <div class="container">
                <div>
                    <img src="./assets/img/soga-blue.svg" alt="" class="logo">
                </div>
                <form method="post" action="{{route('login.store')}}"> <!-- Defina a ação para onde os dados devem ser enviados -->
                    @csrf
                    <div class="inputs">
                        <input type="text" name="numero" placeholder="Nº de estudante" required>
                        <input type="password" name="password" placeholder="Senha" required>
                    </div>
                    <div class="btn">
                        <button type="submit" class="entrar">Entrar</button>
                        <button type="button" class="cadastrar">
                            <a href="/cadastrar" class="link-cadastrar">Cadastrar</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>